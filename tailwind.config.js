/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'hijau':'#addb84',
        'hijau-100' : '#9bc077',
        'coklat':'#333333'
      }
    },
  },
  plugins: [],
}

