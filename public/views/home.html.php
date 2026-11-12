<?php
$stylesheets = ['/css/login.css', '/css/home.css'];
?>

<main class="home-chamber">
    <section class="hero">
        <h1 class="hero-title">
            Welcome to the HexTavern
        </h1>
        <p class="hero-subtitle">
            Pull up a stool, roll your fate upon the tabletop, and get ready with your companions for the adventures that await.
        </p>
    </section>

    <section class="home-cards-container">
        <article class="tome-card">
            <span class="tome-corner top-left" aria-hidden="true"></span>
            <span class="tome-corner top-right" aria-hidden="true"></span>
            <span class="tome-corner bottom-left" aria-hidden="true"></span>
            <span class="tome-corner bottom-right" aria-hidden="true"></span>

            <div class="tome-emblem" aria-hidden="true">
                <i class="fa-solid fa-book-open"></i>
            </div>

            <h2 class="tome-title">Dungeon Master Path</h2>
            <p class="tome-description">
                Login to become the creator of stories.
            </p>

            <form id="dm-form" class="tome-form" method="post" action="/login">
                <a href="/login" class="tome-submit-btn">
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    <span>Login to your account</span>
                </a>

                <div class="card-footer-slot">
                    <p>New DM? <a href="/register" class="register-link">Register here</a></p>
                </div>
            </form>
        </article>

        <article class="tome-card parchment-card">
            <span class="tome-corner top-left" aria-hidden="true"></span>
            <span class="tome-corner top-right" aria-hidden="true"></span>
            <span class="tome-corner bottom-left" aria-hidden="true"></span>
            <span class="tome-corner bottom-right" aria-hidden="true"></span>

            <div class="tome-emblem" aria-hidden="true">
                <i class="fa-solid fa-dungeon"></i>
            </div>

            <h2 class="tome-title">Player Path</h2>
            <p class="tome-description">
                Join the game as one of the adventurers.
            </p>

            <form id="join-form" class="tome-form" method="post" action="/join">
                <a href="/campaigns/join" class="tome-submit-btn">
                    <i class="fa-solid fa-key" aria-hidden="true"></i>
                    <span>Join the table</span>
                </a>

                <div class="card-footer-slot" aria-hidden="true"></div>
            </form>
        </article>
    </section>

    <section class="home-features">
        <div class="feature-item">
            <div class="feature-icon" aria-hidden="true">
                <i class="fa-solid fa-dice-d20"></i>
            </div>
            <div class="feature-content">
                <h3 class="feature-title">Visible game table</h3>
                <p class="feature-desc">
                    All you need in one menu: dice, rolls, your companions.
                </p>
            </div>
        </div>

        <div class="feature-item">
            <div class="feature-icon" aria-hidden="true">
                <i class="fa-solid fa-feather-pointed"></i>
            </div>
            <div class="feature-content">
                <h3 class="feature-title">Player cards</h3>
                <p class="feature-desc">
                    Simplified player cards with all the stats you need to see.
                </p>
            </div>
        </div>

        <div class="feature-item">
            <div class="feature-icon" aria-hidden="true">
                <i class="fa-solid fa-display"></i>
            </div>
            <div class="feature-content">
                <h3 class="feature-title">Zero Install</h3>
                <p class="feature-desc">
                    Directly in your browser across mobile, tablet, and desktop.
                </p>
            </div>
        </div>
    </section>

    <div>
        <p>Tymczasowe linki dla jeszcze nie wykonanych podstron:</p>
        <p><a href="/campaigns">Zobacz Kampanie</a></p>
        <p><a href="/campaigns/1">Zobacz główne okno gry danej kampanii</a></p>
        <p><a href="/campaigns/1/characters">Zobacz karty postaci z danej kampanii</a></p>
    </div>
</main>
