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

        <h1 class="tome-title">Dungeon Master Password Recovery</h1>
        <p class="tome-description">
            Enter your account email and we'll send you a link to reset your password.
        </p>

        <form id="forgot-password-form" class="tome-form" method="post" action="/forgot-password">
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

            <a href="/reset-password" class="tome-submit-btn">
                <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                <span>Send Reset Link</span>
            </a>

            <div class="form-footer">
                <p>Remember your password? <a href="/login" class="register-link">Sign In</a></p>
            </div>
        </form>
    </section>
</main>
