<?php $stylesheets = ['/css/login.css']; ?>

<nav>
    <p>HexTavern</p>
</nav>
<main>
    <form id="login" method="post" action="/login">
        <h1>Logowanie Dungeon Mastera</h1>

        <label for="email"><i class="fa-solid fa-at"></i> Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password"><i class="fa-solid fa-key"></i> Hasło:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Zaloguj się</button>

        <p>Nowy użytkownik? <a href="/">Zarejestruj się tutaj</a></p>
    </form>
</main>
<a href="/">Wróć na stronę główną</a>
