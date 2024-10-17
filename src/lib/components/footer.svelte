<script lang="ts">
	import { scrollTo } from '../actions/scrollTo';
	const currentYear = new Date().getFullYear();
	const locations = [
		{
			name: 'SINGAPORE',
			email: 'info@techvision.com.sg',
			company: 'TechVision Consulting Pte. Ltd.',
			address: '27 Tampiness Sreet 86, #06-23',
			city: 'Singapore, 528570',
			ph: '+659189 6824'
		}
	];
	interface $$Props {
		id: string;
	}

	export let id: $$Props['id'];
	
</script>

<footer class="bg-[#015965] text-white py-12" {id} use:scrollTo>
	<div class="container mx-auto md:px-4 px-8">
		<div class="flex flex-col lg:flex-row mb-12">
			<div class="w-full lg:w-3/4 mb-8 lg:mb-0">
				<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
					{#each locations as location}
						<div>
							<h3 class="text-xl font-bold mb-2">Contact</h3>
							<h3 class="text-base font-bold mb-1">Address</h3>
							<p class="text-md">{location.company}</p>
							<p class="text-md">{location.address}</p>
							<p class="text-md">{location.city}</p>
							<p class="text-md">{location.ph}</p>
							<h3 class="text-base font-bold mb-1 mt-1">Email</h3>
							<p class="text-md">{location.email}</p>
							<a href={`mailto:${location.email}`} class="text-indigo-500">email us</a>
						</div>
					{/each}
				</div>
			</div>
			<div class="w-full lg:w-2/4">
				<h3 class="text-xl font-bold mb-2">ABOUT</h3>
				<p class="text-md">
					TechVision is dedicated to empowering businesses to thrive in today’s dynamic market. We specialize in providing tailored consulting solutions to C level executives. Our experienced team combines industry expertise with innovative approaches to help organizations achieve their goals and navigate complex challenges. Our consultants have themselves been C level executives in the past and specialize in advisory services on large digital transformation initiatives within the telco domain. We believe in fostering strong partnerships with our clients, ensuring we understand their unique needs and delivering actionable insights that drive sustainable growth. Whether you’re a startup looking to establish your foundation or an established company seeking to optimize performance, we are here to guide you every step of the way. Join us as we redefine success through collaboration and strategic thinking.
				</p>
			</div>
		</div>
		<div
			class="border-t border-gray-300 pt-8 flex flex-col md:flex-row justify-between items-center"
		>
			<p class="text-md mb-4 md:mb-0">
				©{currentYear} TechVision. All Rights Reserved.
			</p>
			<div class="flex items-center space-x-4">
				<!-- <a href="/your-data-security" class="text-md underline">Your Data Security</a>
				<span class="text-md">|</span>
				<a href="/legal-information" class="text-md underline">Legal Information</a> -->
				<a
					href="https://www.linkedin.com/company/techvisionconsulting/"
					target="_blank"
					rel="noopener noreferrer"
					class="ml-4"
				>
					<img src="/linkedin.svg" alt="LinkedIn" class="h-6" />
				</a>
			</div>
		</div>
	</div>
</footer>
