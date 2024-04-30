export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
};

module.exports = {
    plugins: [
      require('tailwindcss'),
      require('@tailwindcss/postcss7-compat'),
      // other plugins...
    ]
  }
