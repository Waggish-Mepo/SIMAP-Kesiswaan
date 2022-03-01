module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        color:{
            'biru-wk' : '#223787',
        },
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
