import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'poppins': ['Poppins', 'sans-serif']
            },
            colors: {
                'primary': {
                    100: '#e4fef5',
                    200: '#adfce1',
                    300: '#76face',
                    400: '#cde3db',
                    500: '#04724D',
                    600: '#07c081',
                    700: '#05895c',
                    800: '#035237',
                    900: '#011b12',
                    950: '#182e26',
                },
                'google-blue':'#4285F4',
                'facebook-blue':'#1877F2',
                'transparent':'transparent'
            },

        },
    },

    plugins: [forms],
};
