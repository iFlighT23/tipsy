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
                'pacifico': ['Pacifico'],
                'poppins': ['Poppins']
            },
            colors: {
                'sable_clair': '#FCF5E2',
                'sable_fonce': '#FECB75',
                'rouge': '#FD5C5A',
                'bleu_clair': '#8BDADA',
                'bleu_fonce': '#4CC2C0'
            },
            filter: {
                'goo': "url('#goo')",
              },
        },
    },

    plugins: [forms, typography],

    plugins: [
      require('tailwindcss-animated')
    ],

};
