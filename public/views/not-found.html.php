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
    <a href="/login" class="portal-link">
        <span class="link-primary">DM</span>
        <span class="link-secondary">Login</span>
    </a>
</nav>
<?php
$navbarContent = ob_get_clean();
?>

<main class="login-chamber">
    <section class="tome-card" style="text-align: center;">
        <span class="tome-corner top-left" aria-hidden="true"></span>
        <span class="tome-corner top-right" aria-hidden="true"></span>
        <span class="tome-corner bottom-left" aria-hidden="true"></span>
        <span class="tome-corner bottom-right" aria-hidden="true"></span>

        <div class="tome-emblem" aria-hidden="true">
            <i class="fa-solid fa-dice-d20"></i>
        </div>

        <h1 class="tome-title" style="font-size: 4rem; line-height: 1; margin-bottom: 0.5rem; color: var(--color-brand); text-shadow: 0 0 1.25rem rgba(255, 158, 44, 0.4);">
            404
        </h1>

        <p class="tome-description" style="font-size: 1rem; margin-bottom: 2rem;">
            Strona, której szukasz nie istnieje lub została przeniesiona.
        </p>

        <a href="/" class="tome-submit-btn">
            <i class="fa-solid fa-house" aria-hidden="true"></i>
            <span>Wróć na stronę główną</span>
        </a>
    </section>
</main>
