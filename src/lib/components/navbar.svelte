<script>
	import { scrollTo } from '../actions/scrollTo';
	let isOpen = false;
	const toggleMenu = () => (isOpen = !isOpen);
</script>

<nav class="bg-[#033142] p-4">
	<div class="container mx-auto flex justify-between items-center">
		<img src="/logo-2-white.png" alt="Techvision" class="md:h-16 h-12" />
		<div class="hidden md:flex space-x-4">
			<a href="#about" class="text-white hover:text-gray-300" use:scrollTo>ABOUT US</a>
			<a href="#services" class="text-white hover:text-gray-300" use:scrollTo>SERVICES</a>
			<a href="#founder" class="text-white hover:text-gray-300" use:scrollTo>FOUNDER</a>
			<!-- <a href="#" class="text-white hover:text-gray-300" use:scrollTo>INSIGHTS</a> -->
			<!-- <a href="#" class="text-white hover:text-gray-300" use:scrollTo>CONSUMER STUDY</a> -->
			<a href="#contact" class="bg-[#3d5a80] text-white px-2 pb-1/2 pt-1/2 rounded" use:scrollTo>CONTACT</a> 
		</div>
		<button class="md:hidden text-white" on:click={toggleMenu}>
			<svg
				class="w-6 h-6"
				fill="none"
				stroke="currentColor"
				viewBox="0 0 24 24"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					stroke-linecap="round"
					stroke-linejoin="round"
					stroke-width="2"
					d="M4 6h16M4 12h16m-7 6h7"
				></path>
			</svg>
		</button>
	</div>
	{#if isOpen}
		<div class="md:hidden">
			<a href="#about" class="block text-white py-2 px-4 hover:bg-gray-700" use:scrollTo>ABOUT US</a>
			<a href="#services" class="block text-white py-2 px-4 hover:bg-gray-700" use:scrollTo>SERVICES</a>
			<a href="#founder" class="block text-white py-2 px-4 hover:bg-gray-700" use:scrollTo>FOUNDER</a>
			<!-- <a href="#" class="block text-white py-2 px-4 hover:bg-gray-700" use:scrollTo>INSIGHTS</a> -->
			<!-- <a href="#" class="block text-white py-2 px-4 hover:bg-gray-700" use:scrollTo>CONSUMER STUDY</a> -->
			<a href="#contact" class="block text-white py-2 px-4 bg-[#3d5a80]" use:scrollTo>CONTACT</a> 
		</div>
	{/if}
</nav>
