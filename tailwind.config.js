/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    extend: {}
  },
  variants: {
    extend: {
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
      }
    }
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("@tailwindcss/aspect-ratio")
  ],
  content: [
    "site/templates/**/*.html",
    "site/templates/**/*.php",
    "resources/**/*.js",
    "resources/**/*.vue"
  ]
};
