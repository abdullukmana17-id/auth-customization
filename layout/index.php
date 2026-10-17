<!doctype html>
<html lang="en">
    <head>
        <title><?= $this->renderSection('title') ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Untuk Chrome & Opera -->
        <meta name="theme-color" content="#F7F6E8"/>
        <!-- Untuk Safari iOS -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#F7F6E8"/>
        <!-- Untuk Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#F7F6E8"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <?= $this->renderSection('head') ?>

    </head>

    <body data-bs-theme="system">
        <?= $this->renderSection('body') ?>    

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>

        <?= $this->renderSection('script') ?>
        <script>
            (() => {
            'use strict'

            // === Warna address bar per tema ===
            const themeColors = {
                light: '#F7F6E8',
                dark: '#1F1F1E'
            }

            const getStoredTheme = () => localStorage.getItem('theme')
            const setStoredTheme = theme => localStorage.setItem('theme', theme)

            const getPreferredTheme = () => {
                const storedTheme = getStoredTheme()
                if (storedTheme) {
                return storedTheme
                }
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }

            // === Fungsi update tag meta warna ===
            const setMetaThemeColor = theme => {
                const resolvedTheme = theme === 'auto'
                ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
                : theme
                const color = themeColors[resolvedTheme] ?? themeColors.light

                const metas = [
                { selector: 'meta[name="theme-color"]', attr: 'content' },
                { selector: 'meta[name="apple-mobile-web-app-status-bar-style"]', attr: 'content' },
                { selector: 'meta[name="msapplication-navbutton-color"]', attr: 'content' }
                ]

                metas.forEach(({ selector, attr }) => {
                const el = document.querySelector(selector)
                if (el) el.setAttribute(attr, color)
                })
            }

            const setTheme = theme => {
                if (theme === 'auto') {
                document.documentElement.setAttribute('data-bs-theme',
                    window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
                } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
                }
                setMetaThemeColor(theme) // ← update meta setiap kali tema berubah
            }

            // Terapkan tema + warna meta sejak awal (sebelum DOMContentLoaded)
            setTheme(getPreferredTheme())

            const showActiveTheme = (theme, focus = false) => {
                const themeSwitcher = document.querySelector('#bd-theme')
                if (!themeSwitcher) return

                const themeSwitcherText = document.querySelector('#bd-theme-text')
                const activeThemeIcon = document.querySelector('.theme-icon-active use')
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                element.classList.remove('active')
                element.setAttribute('aria-pressed', 'false')
                })

                btnToActive.classList.add('active')
                btnToActive.setAttribute('aria-pressed', 'true')
                activeThemeIcon.setAttribute('href', svgOfActiveBtn)

                const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
                themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

                if (focus) themeSwitcher.focus()
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme()
                if (storedTheme !== 'light' && storedTheme !== 'dark') {
                setTheme(getPreferredTheme())
                }
            })

            window.addEventListener('DOMContentLoaded', () => {
                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value')
                    setStoredTheme(theme)
                    setTheme(theme)
                    showActiveTheme(theme, true)
                })
                })
            })
            })()
        </script>
    </body>
</html>
