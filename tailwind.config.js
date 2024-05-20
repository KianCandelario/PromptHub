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
        'dark-grey': '#191E29',
        'dark-blue': '#132D46',
        'neon-green': '#01C38D',
        'light-grey': '#696E79',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
        'quicksand': ['Quicksand', 'sans-serif'],
        'kumbh-sans': ['Kumbh Sans', 'sans-serif']
      }
    },
  },
  plugins: [],
}

