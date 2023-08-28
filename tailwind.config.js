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
                'blue': '#0548A7',
                'cyan': '#0277A3',
                'sky': '#05AFDA',
                'beige': '#F1DEB2',
                'orange': '#D67A51',
                'red': '#FF0000'
            },

            flex: {
                'justify-evenly': 'justify-evenly'
            }
        },
    },

    plugins: [forms],
};
