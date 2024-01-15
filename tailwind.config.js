/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
            'gold-500': '#ffbf00',
            'gold-400': '#ffcf40',
            'gold-300': '#ffdc73',


        }
      },
    },
    plugins: [],
  }
