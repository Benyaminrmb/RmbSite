/** @type {import('tailwindcss').Config} */
export default {
    content: [
        'lang/**/*.{php}',
        'config/*.{php}',
        'resources/**/*.{blade.php,js}',
        'resources/**/**/*.{blade.php,js}',
        'resources/**/**/**/*.{blade.php,js}',
        'resources/**/**/**/**/*.{blade.php,js}',
        'resources/**/**/**/**/**/*.{blade.php,js}',
    ],
    safelist: [
        'text-3xl',
        'font-bold',
        'mt-1',
        'mb-2',
        'border-b',
        'text-2xl',
        'my-1',
        'text-xl',
        'py-2',
        'list-disc',
        'list-inside',
        'pl-8',
        'list-decimal',
        'pre',
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

