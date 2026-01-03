const defaultTheme = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin')
const Color = require('color')

module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './public/**/*.html', // Optional: if your admin HTML is in public
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
      },
      maxHeight: {
        '0': '0',
        xl: '36rem',
      },
      colors: {
        // include your custom color palette here (optional)
        gray: {
          '50': '#f9fafb',
          '100': '#f4f5f7',
          '200': '#e5e7eb',
          '300': '#d5d6d7',
          '400': '#9e9e9e',
          '500': '#707275',
          '600': '#4c4f52',
          '700': '#24262d',
          '800': '#1a1c23',
          '900': '#121317',
        },
        blue: {
          '500': '#3f83f8',
          '600': '#1c64f2',
        },
        // add others like red, green, indigo, etc., as needed
      },
    },
  },

  variants: {
    extend: {
      backgroundColor: ['hover', 'focus', 'dark', 'active'],
      textColor: ['hover', 'focus', 'dark'],
      placeholderColor: ['focus', 'dark'],
      borderColor: ['focus', 'hover', 'dark'],
      boxShadow: ['focus', 'dark'],
      display: ['responsive', 'dark'],
    },
  },

  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    plugin(({ addUtilities, theme }) => {
      const newUtilities = {}
      Object.entries(theme('colors')).forEach(([name, value]) => {
        if (typeof value === 'object' && value['300']) {
          const hsla = Color(value['300']).alpha(0.45).hsl().string()
          newUtilities[`.shadow-outline-${name}`] = {
            'box-shadow': `0 0 0 3px ${hsla}`,
          }
        }
      })
      addUtilities(newUtilities, ['focus'])
    }),
  ],
}
