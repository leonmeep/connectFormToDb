module.exports = {
  purge: ['./**/*.html', './**/*.php'], // Include paths to your PHP files
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'poetsen': ['"Poetsen One"', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

