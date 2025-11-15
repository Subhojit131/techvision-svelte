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
				<h3 class="text-3xl md:text-4xl font-semibold text-white mb-4">Mr. Faisal Parvez – Digital Transformation Leader and CxO Advisor / Business Partner</h3>
				<p class="text-gray-300 mb-4">
					Faisal Parvez is a global technology and digital transformation leader with over two decades of experience building and managing customer-centric, data-driven, AI-enabled platforms. Throughout his career, he has been a trusted technology advisor to leading CxOs across global telecommunications companies, guiding them through complex digital transformation journeys, shaping IT strategies, and unlocking business value.
In his current role at a France-headquartered global telecom company—recognized as a Leader in Gartner’s Magic Quadrant across multiple service categories, including Global Network Services, Managed IoT Connectivity Services, Hybrid Cloud & Infrastructure Services, and Security Services—Faisal is shaping the direction and execution framework of a flagship digital transformation program. This initiative reimagines the operating and business model through a modern, cloud-native IT stack, delivering next-generation digital-first offerings and enhanced customer experiences while leveraging automation, AI, and platform-driven innovation.
				</p>
				<p class="text-gray-300 mb-4">
					Previously, Faisal held senior leadership roles at British Telecom (BT Group), one of the world’s leading communications services companies headquartered in the UK. He was instrumental in developing and launching BT’s flagship Network-as-a-Service (NaaS) offering, which positioned BT as a leader in completeness of vision, along with a market-differentiating cybersecurity offering, among several other initiatives. He also led the strategy and delivery of BT’s end-to-end greenfield “moonshot” platform built to launch NextGen OTT products within BT’s international business. Additionally, he spearheaded the creation of a Global Capability Centre (GCC) in India and drove location strategies. As CIO for Asia, the Middle East, and Africa, his team successfully implemented digital solutions for some of the world’s largest multinational corporations, demonstrating how technology innovation can drive operational transformation at scale.
				</p>
				<p class="text-gray-300 mb-4">
					Recognized globally for his digital thought leadership, Faisal frequently shares insights at industry forums and contributes to leading technology and business publications. He is well-regarded among senior leadership circles for his ability to deliver measurable business impact through technology-driven innovation within the telecommunications industry.
				</p>
				<p class="text-gray-300">
					Beyond his corporate roles, Faisal serves as an advisor to a wide range of start-up ecosystems, helping them navigate and achieve success. He has also served on the board of FutureNet and held the position of Vice-Chair of the ICT Committee within the British Chamber of Commerce in Singapore. His work continues to influence global technology strategies, shaping how businesses adopt digital platforms and next-generation technologies to achieve sustainable growth.
				</p>
			</div>
		</div>
	</div>
</section>
