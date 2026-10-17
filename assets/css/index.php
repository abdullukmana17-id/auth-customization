<style>
    @import url('https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap');

    @font-face {
        font-family: "Bootstrap Icons";
        src: url("/assets/font/bootstrap-icons.woff2") format("woff2");
        font-style: normal;
    }

    :root,
    [data-bs-theme=light] {
        --bs-font-sans-serif: "Instrument Serif", serif;
        --bs-font-monospace:  "JetBrains Mono", monospace;
        --bs-body-bg: #FFFFFF;
        --bs-box-shadow: 0 0.25rem 1.25rem rgba(0, 0, 0, 0.035) !important;
        --bs-primary: #d97757 !important;
    }

    .font-sans, p {
        font-family:  "Instrument Sans", sans-serif;
    }

    .font-serif {
        font-family: var(--bs-font-sans-serif);
    }

    .font-mono {
        font-family: var(--bs-font-monospace);
    }


    .btn {
        height: calc(3.5rem + calc(var(--bs-border-width) * 2));
        min-height: calc(3.5rem + calc(var(--bs-border-width) * 2));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: var(--bs-body-font-size);
    }

    .btn.btn-icon {
        min-height: 2.5rem;
        height: 2.5rem !important;
        width: 2.5rem !important;
    }

    .btn.btn-icon.btn-sm {
        min-height: 2rem;
        height: 2rem !important;
        width: 2rem !important;
    }

    .btn-light {
        --bs-btn-bg: var(--bs-white) !important;
        --bs-btn-border-color: var(--bs-border-color) !important;
        --bs-btn-hover-bg: #F0EEE6;
        --bs-btn-active-bg: #EEEDE9;
        --bs-btn-active-color: var(--bs-body-color);
        --bs-btn-border-color: var(--bs-gray-200) !important;
        border-color: var(--bs-border-color) !important;
    }

    .btn-danger {
        --bs-btn-bg: var(--bs-transparent) !important;
        --bs-btn-color: var(--bs-danger-rgb) !important;
        --bs-btn-border-color: var(--bs-danger-bg-subtle) !important;
        --bs-btn-hover-bg: rgba(var(--bs-danger-rgb), 0.2) !important;
        --bs-btn-hover-color: var(--bs-danger-bg) !important;
    }

    .form-control {
        border-color: var(--bs-border-color) !important;
        background-color: var(--bs-white) !important;
    }

    .form-control:focus {
        background-color: var(--bs-white) !important;
        box-shadow: var(--bs-box-shadow) !important;
    }

    /* Chrome, Safari, Edge, Opera */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }

    [data-bs-theme="dark"] {
        --bs-body-color: #dee2e6;
        --bs-body-color-rgb: 222, 226, 230;
        --bs-body-bg: #212529;
        --bs-body-bg-rgb: 33, 37, 41;
        --bs-emphasis-color: #fff;
        --bs-emphasis-color-rgb: 255, 255, 255;
        --bs-secondary-color: rgba(222, 226, 230, 0.75);
        --bs-secondary-color-rgb: 222, 226, 230;
        --bs-secondary-bg: #343a40;
        --bs-secondary-bg-rgb: 52, 58, 64;
        --bs-tertiary-color: rgba(222, 226, 230, 0.5);
        --bs-tertiary-color-rgb: 222, 226, 230;
        --bs-tertiary-bg: #2b3035;
        --bs-tertiary-bg-rgb: 43, 48, 53;
        --bs-primary-text-emphasis: #6ea8fe;
        --bs-secondary-text-emphasis: #a7acb1;
        --bs-success-text-emphasis: #75b798;
        --bs-info-text-emphasis: #6edff6;
        --bs-warning-text-emphasis: #ffda6a;
        --bs-danger-text-emphasis: #ea868f;
        --bs-light-text-emphasis: #f8f9fa;
        --bs-dark-text-emphasis: #dee2e6;
        --bs-primary-bg-subtle: #031633;
        --bs-secondary-bg-subtle: #161719;
        --bs-success-bg-subtle: #051b11;
        --bs-info-bg-subtle: #032830;
        --bs-warning-bg-subtle: #332701;
        --bs-danger-bg-subtle: #2c0b0e;
        --bs-light-bg-subtle: #343a40;
        --bs-dark-bg-subtle: #1a1d20;
        --bs-primary-border-subtle: #084298;
        --bs-secondary-border-subtle: #41464b;
        --bs-success-border-subtle: #0f5132;
        --bs-info-border-subtle: #087990;
        --bs-warning-border-subtle: #997404;
        --bs-danger-border-subtle: #842029;
        --bs-light-border-subtle: #495057;
        --bs-dark-border-subtle: #343a40;
        --bs-heading-color: inherit;
        --bs-link-color: #6ea8fe;
        --bs-link-hover-color: #8bb9fe;
        --bs-link-color-rgb: 110, 168, 254;
        --bs-link-hover-color-rgb: 139, 185, 254;
        --bs-code-color: #e685b5;
        --bs-highlight-color: #dee2e6;
        --bs-highlight-bg: #664d03;
        --bs-border-color: #495057;
        --bs-border-color-translucent: rgba(255, 255, 255, 0.15);
        --bs-form-valid-color: #75b798;
        --bs-form-valid-border-color: #75b798;
        --bs-form-invalid-color: #ea868f;
        --bs-form-invalid-border-color: #ea868f;

        --dark-0: #2C2C2B;
        --dark-1: #1F1F1E;
        --dark-2: #121212;
        --dark-3: #0F0F0F;

        --bs-body-bg: var(--dark-1) !important;

        .btn-light,
        .btn-outline-dark {
            --bs-btn-color: #fff !important;
            --bs-btn-bg: var(--bs-transparent) !important;
            --bs-btn-border-color: var(--dark-3) !important;
            --bs-btn-hover-color: #fff !important;
            --bs-btn-hover-bg: var(--dark-2) !important;
            --bs-btn-hover-border-color: #373b3e !important;
            --bs-btn-focus-shadow-rgb: 66, 70, 73 !important;
            --bs-btn-active-color: #fff !important;
            --bs-btn-active-bg: var(--dark-3) !important;
            --bs-btn-active-border-color: #373b3e !important;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125) !important;
            --bs-btn-disabled-color: #fff !important;
            --bs-btn-disabled-bg: #212529 !important;
            --bs-btn-disabled-border-color: #212529 !important;
        }

        .form-floating input,
        .form-floating textarea {
            border-color: var(--dark-1) !important;
            background-color: var(--dark-0) !important;
        }

        .link-dark {
            color: var(--bs-white) !important;
        }
    }
</style>