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
    },
    daisyui: {
        themes: ["dark"],
    },
    plugins: [require("daisyui")],
}

