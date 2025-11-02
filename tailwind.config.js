import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // TAMBAHKAN WARNA KUSTOM ANDA DI SINI
                'primary': 'oklch(0.704 0.14 182.503)',
                'red-500': 'oklch(0.637 0.237 25.331)',
                // ... dan seterusnya
            },
        },
    },

    plugins: [forms],
};
