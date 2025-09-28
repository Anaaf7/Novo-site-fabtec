import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      colors: {
        "roxo-claro": "#8854D1",
      },
      fontFamily: {
        inconsolata: ["inconsolata", ...defaultTheme.fontFamily.sans],
        orbitron: ["orbitron", ...defaultTheme.fontFamily.sans],
        raveo: ["raveo", ...defaultTheme.fontFamily.sans],
      },
    },
  },

  plugins: [],
};
