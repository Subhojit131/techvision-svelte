<script lang="ts">
  import { scrollTo } from '../actions/scrollTo';
  interface $$Props {
		id: string;
	}

	export let id: $$Props['id'];
</script>

<section class="bg-white" {id} use:scrollTo>
	<div class="flex flex-col md:flex-row">
		<div class="md:w-2/4 bg-[#033142] relative">
			<img
				src="/founder.jpg"
				alt="Faisal Parvez, Founder of Techvision"
				class="w-full h-full object-cover"
			/>
		</div>
		<div class="md:w-3/4 md:p-12 md:px-32 p-8 bg-blue-900 flex items-center">
			<div class="flex flex-col">
				<h2 class="text-xl md:text-2xl font-bold text-white uppercase mb-4">Meet Our Founder</h2>
				<h3 class="text-3xl md:text-4xl font-semibold text-white mb-4">Mr. Faisal Parvez</h3>
				<p class="text-gray-300 mb-4">
					Faisal Parvez, the founder and director of Techvision Consulting, brings over two decades of
					experience in developing and managing customer-centric, data-driven, AI-enabled technology
					platforms in the Telco B2B and B2B2X sectors.
				</p>
				<p class="text-gray-300 mb-4">
					With a strong background in telecommunications and system integration, Faisal has led
					significant projects at BT, including the Global Fabric Network as a Service and Eagle-i
					Cyber Security solutions. His expertise extends to delivering OSS and BSS solutions for
					Fortune 500 companies and leading transformative initiatives like the award-winning
					offshore Global Configuration Hub.
				</p>
				<p class="text-gray-300 mb-4">
					As a global leader and former regional CIO for Asia, the Middle East, and Africa, Faisal
					has guided teams through numerous transformations and established an international
					reputation for digital leadership. He is recognized for his thought leadership, frequently
					sharing insights at industry forums and contributing to various media and publications.
				</p>
				<p class="text-gray-300">
					Based in Singapore, Faisal also serves on the board of FutureNet and has held the position
					of vice-chair of the ICT committee within the British Chamber of Commerce in Singapore.
				</p>
			</div>
		</div>
	</div>
</section>
