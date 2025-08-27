// vite.config.js
import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

import usePHP from 'vite-plugin-php';


export default defineConfig({
    plugins: [
        tailwindcss(),
        usePHP(),
    ]
})
