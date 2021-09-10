module.exports = {
  purge: [],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        marck:['Marck Script'],
      },
      gradientColorStops:{
        'orange' : '#F99500',
        'purple1' : '#6C63FF',
        'purple2' : '#675FF4'
      },
      colors: {
        cyan: '#00FFFF',
        dark_cyan: '#29B6B6',
        green1: '#49D41F',
        blue_fb : '#1277B9'
      },
      textColor:{
        purple: '#6860F5'
      },
      borderColor:{
        purple : '#6860F5'
      },
      blur: {
        xs: '2px',
      },
      margin: {
        buatAKun: '120px',
      }
    },
  },
  variants: {
    extend: {
      display:['group-hover'],
      padding:['hover'],
    },
  },
  plugins: [require('@tailwindcss/forms')],
}
