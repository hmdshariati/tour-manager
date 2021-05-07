const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin')
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
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
        extend: {
            spacing: {
                '128': '32rem',
                '144': '36rem',
            },
            borderRadius: {
                '4xl': '2rem',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        }
    },
    variants: {
        extend: {
            borderColor: ['focus-visible'],
            opacity: ['responsive', 'hover', 'focus', 'disabled'],
        }
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
        plugin(function({ addComponents, theme }) {
            const buttons = {
                '.btn': {
                    padding: `${theme('spacing.2')} ${theme('spacing.4')}`,
                    borderRadius: theme('borderRadius.md'),
                    fontWeight: theme('fontWeight.600'),
                },
                '.btn-indigo': {
                    backgroundColor: theme('colors.indigo.500'),
                    color: theme('colors.white'),
                    '&:hover': {
                        backgroundColor: theme('colors.indigo.600')
                    },
                },
            }

            addComponents(buttons)
        })
    ],
};
