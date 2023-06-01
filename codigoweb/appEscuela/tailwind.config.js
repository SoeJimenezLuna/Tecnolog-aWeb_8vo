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
        fontFamily: {
            Mont: ['Montserrat'],
            Lato:['Lato']
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                azulFuerte:"#424f8f",
                azulMedio:"#505AFC",
                azulClaro:"#00badb",

              },
        },
    },

    plugins: [forms],
};
