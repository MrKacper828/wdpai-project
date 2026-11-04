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

        <h1 class="tome-title">Dungeon Master Login</h1>
        <p class="tome-description">
            Enter the world of imagination.
        </p>

        <form id="login" class="tome-form" method="post" action="/login">
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
                        autocomplete="email"
                    >
                </div>
            </div>

            <div class="field-block">
                <div class="field-label-row">
                    <label for="password" class="field-label">Password</label>
                    <a href="#" class="field-hint-link">Forgot password?</a>
                </div>
                <div class="field-input-wrap">
                    <i class="fa-solid fa-key field-icon" aria-hidden="true"></i>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="SecretPassword123"
                        required
                        autocomplete="current-password"
                    >
                    <button type="button" id="toggle-password" class="input-action-btn" aria-label="Show or hide password">
                        <i class="fa-regular fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="checkbox-row">
                <label class="tome-checkbox-label" for="remember">
                    <input type="checkbox" id="remember" name="remember" class="tome-checkbox">
                    <span class="checkbox-box" aria-hidden="true"></span>
                    <span class="checkbox-text">Remember this device</span>
                </label>
            </div>

            <button type="submit" class="tome-submit-btn">
                <i class="fa-solid fa-lock" aria-hidden="true"></i>
                <span>Sign In</span>
            </button>

            <div class="form-footer">
                <p>New DM? <a href="/" class="register-link">Register here</a></p>
            </div>
        </form>
    </section>
</main>

<script>
    const togglePasswordBtn = document.getElementById('toggle-password');
    const passwordInput = document.getElementById('password');

    if (togglePasswordBtn && passwordInput) {
        togglePasswordBtn.addEventListener('click', () => {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            const icon = togglePasswordBtn.querySelector('i');
            if (icon) {
                icon.className = isPassword ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye';
            }
        });
    }
</script>
