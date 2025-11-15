<script lang="ts">
  import { scrollTo } from '../actions/scrollTo';

  // Interface for component props
  interface $$Props {
    id: string;
  }
  export let id: $$Props['id'];

  // 1. Local state for form data and status
  let name: string = '';
  let email: string = '';
  let phone: string = '';
  let message: string = '';
  let isSubmitting: boolean = false;
  let statusMessage: string = '';
  
  // The path to your Thank You page
  const THANK_YOU_PAGE = '/submission'; 
  
  // 2. New submission handler using fetch
  async function handleSubmit(event: Event) {
    // PREVENT DEFAULT: Stop the browser from navigating (i.e., stop traditional form submit)
    event.preventDefault(); 
    
    isSubmitting = true;
    statusMessage = 'Sending your message...';

    // Collect data into an object that matches the names PHP expects
    const formData = {
      name,
      email,
      phone,
      message
    };
    
    // Convert data to URL-encoded format for PHP's $_POST
    const body = new URLSearchParams(formData as Record<string, string>);

    try {
      // 3. The FETCH call to your PHP backend
      const response = await fetch('/emailer.php', {
        method: 'POST',
        body: body,
        // The Content-Type header is usually handled by URLSearchParams, 
        // but can be added explicitly if needed:
        // headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
      });
      
      const result = await response.json(); // Assuming your PHP returns JSON

      // 4. Check the response status for success
      if (response.ok && result.status === 'success') {
        // SUCCESS: Redirect to the thank you page
        window.location.href = THANK_YOU_PAGE;
        
        // Optional: Reset local form fields
        name = '';
        email = '';
        phone = '';
        message = '';

      } else {
        // ERROR: Display message from PHP
        statusMessage = `Error: ${result.message || 'Failed to send email.'}`;
      }

    } catch (error) {
      // Catch network errors
      statusMessage = 'Network error or server connection failed.';
      console.error('Fetch Error:', error);
    } finally {
      isSubmitting = false;
    }
  }
</script>

<div class="flex justify-center items-center min-h-screen bg-teal-600 py-8 px-4 sm:px-6 lg:px-8" {id} use:scrollTo>
  <div class="w-full max-w-md space-y-8">
    <h3 class="text-[#033142] font-bold text-4xl sm:text-5xl md:text-6xl font-serif text-center">Contact us</h3>
    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg w-full">
      <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 text-center">
        What will it take to unlock your full digital potential?
      </h1>
      <p class="mb-6 text-center">Let's find out together.</p>
      
      <form id="contactForm" action="/emailer.php" class="space-y-4" method="POST" on:submit|preventDefault={handleSubmit}>
        
        {#if statusMessage}
          <p class="text-center p-2 rounded-md" 
             class:bg-green-100={!isSubmitting && statusMessage.includes('Success')}
             class:text-green-800={!isSubmitting && statusMessage.includes('Success')}
             class:bg-red-100={!isSubmitting && statusMessage.includes('Error')}
             class:text-red-800={!isSubmitting && statusMessage.includes('Error')}
             class:text-blue-500={isSubmitting}
          >
            {statusMessage}
          </p>
        {/if}

        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
          <input type="text" name="name" bind:value={name} required class="w-full p-2 border border-gray-300 rounded-md" placeholder="Name"/>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <input type="email" name="email" bind:value={email} required class="w-full p-2 border border-gray-300 rounded-md" placeholder="Email"/>
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700">Phone number</label>
          <input type="tel" name="phone" bind:value={phone} required class="w-full p-2 border border-gray-300 rounded-md" placeholder="Phone"/>
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">How can we help you?</label>
          <textarea name="message" bind:value={message} required class="w-full h-28 p-2 border border-gray-300 rounded-md"></textarea>
        </div>
        <div class="flex justify-center sm:justify-end">
          <button type="submit" disabled={isSubmitting} class="bg-[#3d5a80] text-white px-4 py-2 rounded-md hover:bg-teal-600 w-full sm:w-auto">
            {isSubmitting ? 'Sending...' : 'Send your message'}
          </button>
        </div>
      </form>
      
      </div>
  </div>
</div>