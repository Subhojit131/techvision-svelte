import adapter from '@sveltejs/adapter-static';
import { vitePreprocess } from '@sveltejs/vite-plugin-svelte';

/** @type {import('@sveltejs/kit').Config} */
const config = {
	preprocess: vitePreprocess(),
	kit: {
		adapter: adapter({
			pages: 'build',
			assets: 'build',
			fallback: 'index.html',
			precompress: false,
			strict: true
		}),
		paths: {
			base: process.argv.includes('dev') ? '' : process.env.BASE_PATH
		},
		prerender: {
			entries: ['*', '/contacts'],
			handleHttpError: ({ path, referrer, message }) => {
				if (path === '/contacts' || path.startsWith('/api/')) {
					console.warn(`Skipping prerender for ${path}`);
					return;
				}
				throw new Error(message);
			}
		}
	}
};

export default config;