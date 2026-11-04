// Obsługa przełączania motywu (Dark / Light)
(function () {
    const storageKey = 'theme';

    const updateThemeUI = (btn, theme) => {
        if (!btn) return;
        const icon = btn.querySelector('i');
        if (icon) {
            icon.className = theme === 'light' ? 'fa-regular fa-sun' : 'fa-regular fa-moon';
        }
        const isLight = theme === 'light';
        btn.setAttribute('title', isLight ? 'Zmień motyw na ciemny' : 'Zmień motyw na jasny');
        btn.setAttribute('aria-label', isLight ? 'Włącz tryb ciemny' : 'Włącz tryb jasny');
    };

    const initThemeToggle = () => {
        const themeToggleBtn = document.getElementById('theme-toggle');
        if (!themeToggleBtn) return;

        const currentTheme = document.documentElement.dataset.theme || 'dark';
        updateThemeUI(themeToggleBtn, currentTheme);

        themeToggleBtn.addEventListener('click', () => {
            const activeTheme = document.documentElement.dataset.theme === 'light' ? 'light' : 'dark';
            const nextTheme = activeTheme === 'light' ? 'dark' : 'light';

            document.documentElement.dataset.theme = nextTheme;
            try {
                localStorage.setItem(storageKey, nextTheme);
            } catch (error) {
            }

            updateThemeUI(themeToggleBtn, nextTheme);
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initThemeToggle);
    } else {
        initThemeToggle();
    }
})();