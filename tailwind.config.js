import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      colors: {
        maincolor: '#105AB4',
        maincolordark: '#07274E'
      },
      backgroundImage: {
        'pattern1': "url('/public/assets/images/pattern1.png')",
        'bglight' : "url('/public/assets/images/beglight.svg')",
        'bglightreduced' : "linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('/public/assets/images/beglight.svg')",
        'bgdark' : "url('/public/assets/images/begdark.svg')",
      },
    },
  },

  plugins: [forms],
};