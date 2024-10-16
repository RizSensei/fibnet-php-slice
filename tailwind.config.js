/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  corePlugins: {
    preflight: false,
  },
  theme: {
    extend: {
      colors:{
        'primary':'#35B3A8'
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}