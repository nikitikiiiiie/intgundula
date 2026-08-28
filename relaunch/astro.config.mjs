// @ts-check
import { defineConfig } from 'astro/config';
import sitemap from '@astrojs/sitemap';

// https://astro.build/config
export default defineConfig({
  site: 'https://int.gundula.ch',
  server: {
    port: parseInt(process.env.PORT ?? '4321', 10),
  },
  trailingSlash: 'always',
  integrations: [sitemap()],
  redirects: {
    '/': '/de/',
  },
});
