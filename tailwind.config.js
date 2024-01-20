import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
              'custom': '0px 20px 40px 0px rgba(0, 0, 0, 0.40)',
              'basic': '0 10px 20px #DCE1EB',
              'button': '0px 10px 10px 0px #DCE1EB;'
            }
        },
    },

    plugins: [],
};
