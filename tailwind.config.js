/** @type {import('tailwindcss').Config} */
export default {
    content: [
        'resources/**/*.{blade.php,js}',
        'resources/**/**/*.{blade.php,js}',
        'resources/**/**/**/*.{blade.php,js}',
        'resources/**/**/**/**/*.{blade.php,js}',
        'resources/**/**/**/**/**/*.{blade.php,js}',
    ],
    theme: {
        extend: {},
        container: {
            center: true,
            padding: {
                DEFAULT: '0.75rem',
                xs2: '3rem',
                sm: '6rem',
                md: '2rem',
                lg: '4rem',
                xl: '12rem',
                '2xl': '19rem',
            },
        },
    },
    daisyui: {
        themes: ["dark"],
    },
    plugins: [require("daisyui")],
}

