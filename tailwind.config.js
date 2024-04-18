/** @type {import('tailwindcss').Config} */
export default {
    content: [
        'lang/**/*.{php}',
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
        themes: [
            {
                mytheme: {

                    "primary": "#1B55AC",

                    "secondary": "#eab308",

                    "accent": "#fb5f92",

                    "neutral": "#0f2239",

                    "base-100": "#0a0f19",

                    "info": "#2dd4bf",

                    "success": "#008000",

                    "warning": "#c2410c",

                    "error": "#b91c1c",
                },
            },
        ],
    },
    plugins: [require("daisyui")],
}

