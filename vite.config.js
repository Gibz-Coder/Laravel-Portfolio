import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        // Production optimizations
        minify: "terser",
        cssMinify: true,
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ["axios"],
                },
            },
        },
        // Optimize chunk size warnings
        chunkSizeWarningLimit: 1000,
        // Source maps for production debugging (optional)
        sourcemap: false,
    },
    // Optimize dependencies
    optimizeDeps: {
        include: ["axios"],
    },
});
