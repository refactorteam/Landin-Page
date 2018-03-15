module.exports = {
    "env": {
        "browser": true,
        "jquery": true
    },
    "extends": [
        "eslint:recommended",
        "jquery"
    ],
    "rules": {
        "indent": [
            "error",
            4
        ],
        "linebreak-style": [
            "error",
            "windows"
        ],
        "quotes": [
            "error",
            "single"
        ],
        "semi": [
            "error",
            "always"
        ],
        "space-in-parens": [
            "error",
            "never"
        ],
        "no-mixed-spaces-and-tabs": [
            "off",
            "smart-tabs"
        ]
    }
};