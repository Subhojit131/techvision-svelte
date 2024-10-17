<script lang="ts">
  interface $$Props {
    id: string;
  }

  export let id: $$Props['id'];
  var submitted=false;
  function handleIframeLoad() {
    if (submitted) {
      window.location.href = '/submission';  // Use window.location.href for URL redirection
      const form = document.getElementById("contactForm") as HTMLFormElement;
      form.reset(); // Reset the form here after redirection
      submitted = false; // Reset the submitted flag for future submissions
    }
  }

  function handleFormSubmit() {
    submitted = true;

    
  }
</script>

<div class="flex justify-center items-center min-h-screen bg-teal-600 py-8 px-4 sm:px-6 lg:px-8" {id}>
  <div class="w-full max-w-md space-y-8">
    <h3 class="text-[#033142] font-bold text-4xl sm:text-5xl md:text-6xl font-serif text-center">Contact us</h3>
    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg w-full">
      <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 text-center">
        What will it take to unlock your full digital potential?
      </h1>
      <p class="mb-6 text-center">Let's find out together.</p>
      <form id="contactForm" action="https://docs.google.com/forms/d/e/1FAIpQLScdSzHVzK3rq4e1JVtQgNrrLDvYZ-leSBgAcnBG1ISIyUgt3g/formResponse" class="space-y-4" method="post" target="hiddenConfirm" on:submit={handleFormSubmit}>
        <div>
          <label for="entry.1992012884" class="block text-sm font-medium text-gray-700">Your Name</label>
          <input type="text"  name="entry.1992012884" required class="w-full p-2 border border-gray-300 rounded-md" placeholder="Name"/>
        </div>
        <div>
          <label for="entry.1187101727" class="block text-sm font-medium text-gray-700">Email Address</label>
          <input type="text"  name="entry.1187101727" required class="w-full p-2 border border-gray-300 rounded-md" placeholder="Email"/>
        </div>
        <div>
          <label for="entry.816489950" class="block text-sm font-medium text-gray-700">Phone number</label>
          <input type="text"  name="entry.816489950" required class="w-full p-2 border border-gray-300 rounded-md" placeholder="Phone"/>
        </div>
        <div>
          <label for="entry.420113231" class="block text-sm font-medium text-gray-700">How can we help you?</label>
          <input type="text"  name="entry.420113231" required class="w-full h-28 p-2 border border-gray-300 rounded-md"/>
        </div>
        <div class="flex justify-center sm:justify-end">
          <button type="submit" class="bg-[#3d5a80] text-white px-4 py-2 rounded-md hover:bg-teal-600 w-full sm:w-auto">
            Send your message
          </button>
        </div>
      </form>
      <iframe name="hiddenConfirm" id="hiddenConfirm" class="hidden" on:load={handleIframeLoad} title="Form submission frame"></iframe>
    </div>
  </div>
</div>