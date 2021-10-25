module.exports = {
  purge: [
    './resources/views/*.blade.php',
    './resources/views/front-end/*.blade.php',
    './resources/views/dashboard/**/*.blade.php',
    './resources/views/front-end/**/*.blade.php',
    './resources/views/dashboard/*.blade.php',
    './resources/views/**',
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
