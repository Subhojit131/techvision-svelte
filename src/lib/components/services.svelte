<script lang="ts">
	import { scrollTo } from '../actions/scrollTo';
	const services = [
		{ name: 'TECHNOLOGY STRATEGY', link: '#', description: 'IT Strategy Development and Roadmap' },
		{
			name: 'DIGITAL TRANSFORMATION',
			link: '#',
			description: 'Digital Strategy and Innovation Roadmap'
		},
		{ name: 'CLOUD SERVICES', link: '#', description: 'Cloud Readiness Assessment and Strategy' },
		{ name: 'CYBERSECURITY', link: '#', description: 'Cybersecurity Assessment and Strategy' },
		{ name: 'DATA ANALYTICS', link: '#', description: 'Data Strategy and Governance' },
		{ name: 'ENTERPRISE APPLICATIONS', link: '#', description: 'ERP Consulting (SAP, Oracle)' },
		{ name: 'IT INFRASTRUCTURE', link: '#', description: 'Network and Infrastructure Assessment' },
		{ name: 'SOFTWARE DEVELOPMENT', link: '#', description: 'Custom Application Development' },
		{
			name: 'CLOUD-NATIVE DEVELOPMENT',
			link: '#',
			description: 'Cloud-Native Application Development'
		},
		{ name: 'PROJECT MANAGEMENT', link: '#', description: 'Project Management Office (PMO) Setup' },
		{ name: 'DIGITAL MARKETING', link: '#', description: 'Marketing Technology Integration' },
		{ name: 'EMERGING TECHNOLOGIES', link: '#', description: 'Blockchain Strategy' },
		{ name: 'IT HEALTH CHECK', link: '#', description: 'IT Health Check and Assessment' },
		{ name: 'IT STAFFING', link: '#', description: 'IT Resource Planning and Strategy' },
		{ name: 'PRODUCT INNOVATION', link: '#', description: 'Product Lifecycle Management' },
		{
			name: 'CONTACT CENTER SOLUTIONS',
			link: '#',
			description: 'Contact Center Strategy and Implementation'
		}
	];

	const techvisionReasons = [
		{
			title: 'Deliver more value, faster, and with less effort.',
			description:
				'Our enhanced approach to program execution reduces risk and speeds up outcomes. We deploy lean, specialized teams of industry experts to gain organizational support, unlock benefits incrementally, and establish a clear path to long-term success.'
		},
		{
			title: 'HARNESSING TECHNOLOGY TO EMPOWER PEOPLE.',
			description:
				'Our mission is to equip workforces for more valuable roles. By utilizing cutting-edge digital tools, we tailor transformation through automation, gamification, and top-tier learning management systems.'
		},
		{
			title: 'BRIDGING THE GAP BETWEEN STRATEGY AND EXECUTION.',
			description:
				'While many consultancies excel at creating strategies, they often fall short on execution. We ensure that our commitments are never passed off to junior staff, and we guide our clients through every step.'
		}
	];

	interface $$Props {
		id: string;
	}

	export let id: $$Props['id'];
</script>

<section class="bg-white" {id} use:scrollTo>
	<!-- Merged section: Why to choose techvision -->
	<div class="container md:w-3/4 mx-auto md:px-4 px-8 my-16">
		<h2 class="text-4xl md:text-5xl font-bold text-[#0b6e99] text-center mb-8">
			REDEFINING CONSULTING FOR THE DIGITAL AGE
		</h2>

		<p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
			In a rapidly evolving consulting industry, Techvision stands out by delivering innovative
			solutions that drive meaningful results across your entire operation.
		</p>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
			{#each techvisionReasons as reason}
				<div class="bg-[#e6f3f7] text-[#033142] p-6">
					<h4 class="font-bold text-xl mb-4">{reason.title}</h4>
					<p class="text-sm">{reason.description}</p>
				</div>
			{/each}
		</div>
	</div>

	<div class="bg-[#033142] w-full py-6">
		<div class="container mx-auto px-4">
			<div class="text-white py-12 px-6 mb-12 md:w-1/2 mx-auto leading-none">
				<h3 class="text-2xl md:text-4xl font-bold text-center leading-tight">
					DIGITALLY-ENABLED CONSULTING IS DESIGNED TO ACCELERATE AND DE-RISK YOUR AMBITIONS.
				</h3>
			</div>
		</div>
	</div>

	<div class="container md:w-3/4 mx-auto md:px-4 px-8 my-16">
		<h3 class="text-3xl md:text-4xl font-bold text-[#033142] text-center mb-8">
			EMPOWERED BY CUTTING-EDGE TECHNICAL EXPERTISE
		</h3>

		<p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
			At the core of our comprehensive approach - The Techvision Way - lies a profound mastery of
			critical domains in today's and tomorrow's technological landscape. Our carefully assembled
			network of industry-leading partners and state-of-the-art digital toolkit is engineered to
			seamlessly enhance human ingenuity with bespoke, high-impact solutions. From cloud
			transformation to emerging technologies, our diverse portfolio of services is designed to
			drive innovation, optimize operations, and propel businesses into the digital future.
		</p>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
			{#each services as service}
				<div
					class="bg-[#e6f3f7] text-[#033142] py-4 px-6 flex flex-col justify-between items-left hover:bg-[#c5e5f0] transition-colors duration-300"
				>
					<span class="font-semibold">{service.name}</span>
					<span class="text-gray-600">{service.description}</span>
				</div>
			{/each}
		</div>
	</div>
</section>
