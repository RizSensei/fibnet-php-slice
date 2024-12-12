/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        "lime-green": "#91BE56",
        "lime-green-bright": "#8AF291",
        "dark-blue": "#2B5488",
      },
    },
  },
  corePlugins: {
    preflight: false,
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
