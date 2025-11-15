<script>
	import { page } from '$app/stores';
	import '../app.css';
	import Navbar from '../lib/components/navbar.svelte';
	import Hero from '../lib/components/hero.svelte';
	import Services from '../lib/components/services.svelte';
	import Founder from '../lib/components/founder.svelte';
	import Footer from '../lib/components/footer.svelte';
	import Contact from '../lib/components/contact.svelte'; 
	import Emailer from '$lib/components/emailer.svelte';

</script>

<svelte:head>
	<title>{$page.data.title || 'TechVision'}</title>
	
	<meta
		name="description"
		content={$page.data.metaDescription ||
			'TechVision Consulting Pte. Ltd. is a Singapore-based consulting firm focused on delivering cutting-edge IT solutions and advisory services to a global clientele. With expertise across cloud fabric infrastructure, and digital transformation strategies, TechVision Consulting supports businesses in optimizing their technological frameworks, and fostering growth through innovation. The company provides services to clients across Singapore, the UK, India, Europe, the US, Canada, and Asia, specializing in end-to-end digital solutions, cybersecurity strategies, and efficient IT infrastructure management.'}
	/>
</svelte:head>
<Navbar />
<Hero />
<Services id="services" />
<Founder id="founder" />
<Emailer id="contact" />
<Footer id="about" />
<slot />
