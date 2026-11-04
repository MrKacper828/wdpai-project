<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= htmlspecialchars($pageTitle ?? 'Aplikacja', ENT_QUOTES, 'UTF-8') ?>
    </title>

    <script>
    (function () {
        const storageKey = 'theme';
        let savedTheme = null;

        try {
            savedTheme = localStorage.getItem(storageKey);
        } catch (error) {
            savedTheme = null;
        }

        const hasSavedTheme = savedTheme === 'light' || savedTheme === 'dark';
        const systemPrefersDark = window.matchMedia(
            '(prefers-color-scheme: dark)'
        ).matches;

        document.documentElement.dataset.theme = hasSavedTheme
            ? savedTheme
            : (systemPrefersDark ? 'dark' : 'light');
    })();
    </script>

    <link rel="stylesheet" href="/css/style.css">
    <?php foreach ($stylesheets ?? [] as $stylesheet): ?>
        <link rel="stylesheet" href="<?= htmlspecialchars($stylesheet, ENT_QUOTES, 'UTF-8') ?>">
    <?php endforeach; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="/js/theme.js" defer></script>
</head>
<body>
    <header class="tavern-topbar">
        <a href="/" class="brand-group" aria-label="HexTavern - strona główna">
            <div class="brand-emblem" aria-hidden="true">
                <i class="fa-solid fa-fire-burner"></i>
            </div>
            <div class="brand-info">
                <span class="brand-title">HexTavern</span>
                <span class="brand-tagline">ONLINE TAVERN TABLETOP</span>
            </div>
        </a>

        <?= $navbarContent ?? '' ?>

        <div class="utility-group">
            <button type="button" id="sound-toggle" class="util-btn" title="Dźwięk atmosfery" aria-label="Ambience sound">
                <i class="fa-solid fa-volume-high"></i>
            </button>
            <button type="button" id="theme-toggle" class="util-btn" title="Zmień motyw" aria-label="Toggle theme">
                <i class="fa-regular fa-moon"></i>
            </button>
            <button type="button" id="lang-switch" class="lang-pill" aria-label="Wybierz język (PL / EN)">
                <span class="lang-option active">PL</span>
                <span class="lang-divider" aria-hidden="true">/</span>
                <span class="lang-option">EN</span>
            </button>
        </div>
    </header>

    <?= $content ?>

    <footer class="app-footer">
        <div class="footer-col-left">
            <span>HexTavern · Tabletop Simulator</span>
        </div>
        <div class="footer-col-center">
            <a href="#">Tavern Rules</a>
            <a href="#">Patrons</a>
        </div>
        <div class="footer-col-right">
            <span>© 2026 HexTavern</span>
        </div>
    </footer>

    <script>
        const langSwitchBtn = document.getElementById('lang-switch');
        if (langSwitchBtn) {
            langSwitchBtn.addEventListener('click', () => {
                const options = langSwitchBtn.querySelectorAll('.lang-option');
                options.forEach(opt => opt.classList.toggle('active'));
            });
        }

        const soundToggleBtn = document.getElementById('sound-toggle');
        if (soundToggleBtn) {
            soundToggleBtn.addEventListener('click', () => {
                const icon = soundToggleBtn.querySelector('i');
                if (icon) {
                    const isMuted = icon.classList.contains('fa-volume-xmark');
                    icon.className = isMuted ? 'fa-solid fa-volume-high' : 'fa-solid fa-volume-xmark';
                }
            });
        }
    </script>
</body>
</html>
