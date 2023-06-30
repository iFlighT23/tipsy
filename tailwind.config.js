import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';



/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                pacifico : ['pacifico-regular'],
                poppins: ['poppins']
            },
            colors: {
                'old': '#FCF5E2',
                'topaz': '#FECB75',
                'sunset': '#FD5C5A',
                'mblue': '#8BDADA',
                'sea': '#4CC2C0'
            },
        },
    },

    plugins: [forms, typography],
};
