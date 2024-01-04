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
        },
    },

    plugins: [
        require('@tailwindcss/forms')({
          strategy: 'class', // Pilih strategy class untuk mengaktifkan plugin utility class
        }),
        function ({ addUtilities }) {
          const newUtilities = {
            '.box-shadow-custom': {
              boxShadow: '0px 20px 40px 0px rgba(0, 0, 0, 0.40)',
            },
          };
          addUtilities(newUtilities, ['responsive', 'hover']);
        },
      ],
};
