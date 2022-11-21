/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php",
    "./*.php",
  ],
  theme: {
    extend: {
      colors: {
        'base': '#FEFEFE',
        'base-color': '#FEFEFE',
        'base-cont': '#222222',
        'main': '#dae89f',
        'main-cont': '#222222',
        'accent': '#54A734',
        'accent-cont': '#FEFEFE',
      },
      fontSize: {
        '2x': '2rem',
      }
    },
  },
  plugins: [],
}
