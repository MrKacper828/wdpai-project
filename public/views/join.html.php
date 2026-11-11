<?php
$stylesheets = ['/css/login.css'];

ob_start();
?>
<nav class="portal-nav" aria-label="Nawigacja główna">
    <a href="/" class="portal-link">
        <span class="link-primary">The Tavern</span>
        <span class="link-secondary">Main</span>
    </a>
    <a href="/campaigns/join" class="portal-link active">
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
    <section class="tome-card parchment-card">
        <span class="tome-corner top-left" aria-hidden="true"></span>
        <span class="tome-corner top-right" aria-hidden="true"></span>
        <span class="tome-corner bottom-left" aria-hidden="true"></span>
        <span class="tome-corner bottom-right" aria-hidden="true"></span>

        <div class="tome-emblem" aria-hidden="true">
            <i class="fa-solid fa-dungeon"></i>
        </div>

        <h1 class="tome-title">Join the Table</h1>
        <p class="tome-description">
            Enter given room code and state your name to join the campaign.
        </p>

        <form id="join-form" class="tome-form" method="post" action="/join">
            <div class="field-block">
                <label for="room-code" class="field-label">Room Code</label>
                <div class="field-input-wrap">
                    <i class="fa-solid fa-hashtag field-icon" aria-hidden="true"></i>
                    <input
                        type="text"
                        id="room-code"
                        name="room_code"
                        placeholder="TAVERN-DRAGON-8265"
                        required
                    >
                </div>
            </div>

            <div class="field-block">
                <label for="username" class="field-label">Username</label>
                <div class="field-input-wrap">
                    <i class="fa-solid fa-user field-icon" aria-hidden="true"></i>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="HappyPlayer21"
                        required
                    >
                </div>
            </div>

            <a href="/campaigns/1" class="tome-submit-btn">
                <i class="fa-solid fa-key" aria-hidden="true"></i>
                <span>Join The Session</span>
            </a>

            <div class="form-footer">
                <p>Dungeon Master? <a href="/login" class="register-link">Enter via the DM Ledger &rarr;</a></p>
            </div>
        </form>
    </section>
</main>
