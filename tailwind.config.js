module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/**/*.blade.php',
    './resources/**/**/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: {
        'bg1': "url('/img/bg1.jpg')",
        'bg2': "url('/img/bg2.jpg')",
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
