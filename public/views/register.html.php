<?php
$stylesheets = ['/css/login.css'];

ob_start();
?>
<nav class="portal-nav" aria-label="Nawigacja główna">
    <a href="/" class="portal-link">
        <span class="link-primary">The Tavern</span>
        <span class="link-secondary">Main</span>
    </a>
    <a href="/campaigns/join" class="portal-link">
        <span class="link-primary">Join</span>
        <span class="link-secondary">Room</span>
    </a>
    <a href="/login" class="portal-link active">
        <span class="link-primary">DM</span>
        <span class="link-secondary">Login</span>
    </a>
</nav>
<?php
$navbarContent = ob_get_clean();
?>

<main class="login-chamber">
    <section class="tome-card">
        <span class="tome-corner top-left" aria-hidden="true"></span>
        <span class="tome-corner top-right" aria-hidden="true"></span>
        <span class="tome-corner bottom-left" aria-hidden="true"></span>
        <span class="tome-corner bottom-right" aria-hidden="true"></span>

        <div class="tome-emblem" aria-hidden="true">
            <i class="fa-solid fa-book-open"></i>
        </div>

        <h1 class="tome-title">Dungeon Master Account Registration</h1>

        <form id="register-form" class="tome-form" method="post" action="/register">
            <div class="field-block">
                <label for="username" class="field-label">Username</label>
                <div class="field-input-wrap">
                    <i class="fa-solid fa-user field-icon" aria-hidden="true"></i>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="DungeonMaster42"
                        required
                    >
                </div>
            </div>

            <div class="field-block">
                <label for="email" class="field-label">Email</label>
                <div class="field-input-wrap">
                    <i class="fa-solid fa-scroll field-icon" aria-hidden="true"></i>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="your.email@gmail.com"
                        required
                    >
                </div>
            </div>

            <div class="field-block">
                <div class="field-label-row">
                    <label for="password" class="field-label">Password</label>
                    <div id="password-match-status" class="password-match-indicator" aria-live="polite">
                        <span class="match-dot" aria-hidden="true"></span>
                        <span class="match-text">Passwords must match</span>
                    </div>
                </div>
                <div class="field-input-wrap">
                    <i class="fa-solid fa-key field-icon" aria-hidden="true"></i>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="SecretPassword123"
                        required
                    >
                    <button type="button" id="toggle-password" class="input-action-btn" aria-label="Show or hide password">
                        <i class="fa-regular fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="field-block">
                <div class="field-label-row">
                    <label for="password-confirm" class="field-label">Confirm Password</label>
                </div>
                <div class="field-input-wrap">
                    <i class="fa-solid fa-key field-icon" aria-hidden="true"></i>
                    <input
                        type="password"
                        id="password-confirm"
                        name="password_confirm"
                        placeholder="Repeat your password"
                        required
                    >
                    <button type="button" id="toggle-password-confirm" class="input-action-btn" aria-label="Show or hide password">
                        <i class="fa-regular fa-eye"></i>
                    </button>
                </div>
            </div>

            <a href="/login" class="tome-submit-btn">
                <i class="fa-solid fa-lock" aria-hidden="true"></i>
                <span>Create Account</span>
            </a>
        </form>
    </section>
</main>

<script>
    const setupPasswordToggle = (btnId, inputId) => {
        const btn = document.getElementById(btnId);
        const input = document.getElementById(inputId);
        if (!btn || !input) return;

        btn.addEventListener('click', () => {
            const isPassword = input.getAttribute('type') === 'password';
            input.setAttribute('type', isPassword ? 'text' : 'password');
            const icon = btn.querySelector('i');
            if (icon) {
                icon.className = isPassword ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye';
            }
        });
    };

    setupPasswordToggle('toggle-password', 'password');
    setupPasswordToggle('toggle-password-confirm', 'password-confirm');

    // Weryfikacja zgodności haseł na żywo
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('password-confirm');
    const indicator = document.getElementById('password-match-status');
    const matchText = indicator ? indicator.querySelector('.match-text') : null;

    const checkPasswordMatch = () => {
        if (!confirmInput || !passwordInput || !indicator || !matchText) return;

        // Jeśli confirm password jest jeszcze puste, ukrywamy wskaźnik
        if (confirmInput.value.length === 0) {
            indicator.classList.remove('active', 'mismatch', 'matched');
            return;
        }

        indicator.classList.add('active');

        if (passwordInput.value === confirmInput.value) {
            indicator.classList.remove('mismatch');
            indicator.classList.add('matched');
            matchText.textContent = 'Passwords match';
        } else {
            indicator.classList.remove('matched');
            indicator.classList.add('mismatch');
            matchText.textContent = 'Passwords do not match';
        }
    };

    if (passwordInput && confirmInput) {
        confirmInput.addEventListener('input', checkPasswordMatch);
        passwordInput.addEventListener('input', checkPasswordMatch);
    }
</script>
