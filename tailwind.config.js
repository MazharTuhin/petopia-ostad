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
        'sans': ["Manrope", "sans-serif"],
      },
      colors: {
        'primary': '#1C4A2A',
        'muted': '#8C8C8C',
        'border-cart': '#E0E8E0',
        'card-bg' : '#F8FCF9',
        'green-text' : '#0E2515',
      },
      backgroundImage: {
        'hero-image' : "url({{ asset('images/hero-image.jpg')}})",
      },
      screens: {
        'sm': '576px',
        'md': '768px',
        'lg': '992px',
        'xl': '1200px',
        '2xl': '1400px',
      },
    },
  },
  plugins: [
    
  ],
}

