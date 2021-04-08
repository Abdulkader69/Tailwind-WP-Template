// tailwind.config.js
const colors = require('tailwindcss/colors')

module.exports = {
  theme: {
    container: {
      center: true,
      padding: '15px',
    },
    screens: {
      sm: '480px',
      md: '768px',
      lg: '980px',
      xl: '1320px',
    },
    colors: {
      gray: colors.coolGray,
      blue: colors.lightBlue,
      red: colors.rose,
      pink: colors.fuchsia,
    },
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    fontSize: {
      'xs': '14px',
      'sm': '18px',
      'lg': '30px',
      'xl': '48px',
    },
    extend: {
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  }
}