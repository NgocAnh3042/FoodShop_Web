import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Plus Jakarta Sans", ...defaultTheme.fontFamily.sans],
                body: ["Plus Jakarta Sans", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                background: "#fff8f5",
                "inverse-surface": "#342f2b",
                "on-tertiary-fixed": "#002113",
                primary: "#a33900",
                "tertiary-container": "#00855b",
                "primary-fixed": "#ffdbce",
                "on-secondary-fixed": "#2a1700",
                "surface-container-highest": "#eae1da",
                "on-secondary": "#ffffff",
                "primary-container": "#cc4900",
                "surface-container-lowest": "#ffffff",
                "secondary-fixed": "#ffddb8",
                "on-surface-variant": "#5a4138",
                tertiary: "#006947",
                "primary-fixed-dim": "#ffb599",
                "on-error": "#ffffff",
                "on-error-container": "#93000a",
                "surface-tint": "#a73a00",
                "tertiary-fixed-dim": "#4edea3",
                "on-tertiary-container": "#f5fff6",
                "error-container": "#ffdad6",
                "surface-container": "#f6ece6",
                "on-surface": "#1f1b17",
                outline: "#8e7166",
                "inverse-on-surface": "#f9efe8",
                "on-primary-container": "#fffbff",
                "on-background": "#1f1b17",
                "surface-container-low": "#fcf2eb",
                "on-primary-fixed": "#370e00",
                "tertiary-fixed": "#6ffbbe",
                "secondary-container": "#fea619",
                "surface-bright": "#fff8f5",
                secondary: "#855300",
                "on-tertiary": "#ffffff",
                "secondary-fixed-dim": "#ffb95f",
                "surface-container-high": "#f0e6e0",
                "outline-variant": "#e2bfb2",
                "inverse-primary": "#ffb599",
                "on-secondary-container": "#684000",
                "on-primary": "#ffffff",
                "surface-dim": "#e2d8d2",
                "on-secondary-fixed-variant": "#653e00",
                error: "#ba1a1a",
                surface: "#fff8f5",
                "on-tertiary-fixed-variant": "#005236",
                "surface-variant": "#eae1da",
                "on-primary-fixed-variant": "#7f2b00",
            },
            borderRadius: {
                DEFAULT: "0.25rem",
                lg: "0.5rem",
                xl: "0.75rem",
                full: "9999px",
            },
            spacing: {
                gutter: "1.5rem",
                "space-xs": "0.25rem",
                margin: "2rem",
                "space-xl": "2.5rem",
                "space-sm": "0.5rem",
                "gutter-compact": "1rem",
                "space-lg": "1.5rem",
                "margin-wide": "3.5rem",
                "space-md": "1rem",
            },
            fontSize: {
                "headline-md": [
                    "22px",
                    {
                        lineHeight: "30px",
                        letterSpacing: "-0.005em",
                        fontWeight: "600",
                    },
                ],
                "headline-sm": [
                    "18px",
                    { lineHeight: "26px", fontWeight: "600" },
                ],
                "label-lg": ["15px", { lineHeight: "20px", fontWeight: "600" }],
                "headline-lg": [
                    "28px",
                    {
                        lineHeight: "36px",
                        letterSpacing: "-0.01em",
                        fontWeight: "700",
                    },
                ],
                "display-lg": [
                    "48px",
                    {
                        lineHeight: "56px",
                        letterSpacing: "-0.02em",
                        fontWeight: "800",
                    },
                ],
                "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                "display-sm": [
                    "36px",
                    {
                        lineHeight: "44px",
                        letterSpacing: "-0.015em",
                        fontWeight: "700",
                    },
                ],
                "label-md": ["13px", { lineHeight: "18px", fontWeight: "600" }],
                "label-sm": [
                    "11px",
                    {
                        lineHeight: "16px",
                        letterSpacing: "0.03em",
                        fontWeight: "700",
                    },
                ],
                "body-sm": ["12px", { lineHeight: "18px", fontWeight: "400" }],
                "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            },
        },
    },

    plugins: [forms],
};
