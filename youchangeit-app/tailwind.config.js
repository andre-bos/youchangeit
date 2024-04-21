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
        },
    },

    plugins: [
        forms,
        function({ addComponents }) {
            addComponents({
                '.main-template > *': {
                    gridColumn: '2 / -2',
                },
                '.main-template': {
                    padding: '4em 0',
                },
                '.grid-cols-custom-small': {
                    gridTemplateColumns: 'minmax(1em, 1fr) repeat(3, minmax(150px, 320px)) minmax(1em, 1fr)',
                },
                '.grid-cols-custom-medium': {
                    gridTemplateColumns: 'minmax(1em, 1fr) repeat(3, minmax(150px, 350px)) minmax(1em, 1fr)',
                },
            })
        },
    ],
};
