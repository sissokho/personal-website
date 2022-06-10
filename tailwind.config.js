module.exports = {
    content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        fontFamily: {
            montserrat: ["Montserrat", "sans-serif"],
        },
        extend: {},
    },
    plugins: [require("@tailwindcss/typography")],
};
