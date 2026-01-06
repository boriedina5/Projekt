/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        anton: ['Anton', 'sans-serif'],
        cardo: ['Cardo', 'serif'],
        hk: ['HK Grotesk', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
