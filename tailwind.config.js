module.exports = {
    // content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    // content: [
    //     "./source/index.blade.php",
    //     "./source/contact.blade.php",
    //     "./source/work.blade.php",
    //     "./source/_components/**/*.blade.php",
    //     "./source/_layouts/**/*.blade.php",
    //     "./source/_partials/**/*.blade.php}",
    //     "./source/_projects/*.md",
    // ],
    content: require("fast-glob").sync("./source/**/*{blade.php,md,html}"),
    theme: {
        fontFamily: {
            montserrat: ["Montserrat", "sans-serif"],
        },
        extend: {},
    },
    plugins: [require("@tailwindcss/typography")],
};
