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

    safelist: [
        { pattern: /bg-(red|yellow|green|sky|amber|blue|orange|purple|pink|emerald)-(400|100|200|500|300|600)/ },
        { pattern: /text-(gray|yellow|green)-(700)/ },
        { pattern: /ring-(gray|yellow|green)-(600)/ },
        { pattern: /rotate-(2|3|6)/ },

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
                'bleu_fonce': '#4CC2C0',
               // 'red':'#D10E1A',

            },
            filter: {
                'goo': "url('#goo')",
                pacifico: ['pacifico'],
                poppins: ['poppins']
            },
            dropShadow: {
                '3xl': '8px 8px 4px rgba(0,0,0,0.25)',
            },
            height: {
                '85': '22rem',
            },
        },
    },

    plugins: [forms, typography],

    plugins: [
      require('tailwindcss-animated')
    ],

};
