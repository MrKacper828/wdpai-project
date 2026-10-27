<!doctype html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <nav>
        <p>navbar</p>
        <p><a href="/campaigns/<?= $campaignId ?>">Wróć do pokoju gry</a></p>
    </nav>
    <main>
        <section>
            <p>Lista kart postaci: </p>
            <ul>
                <li>Karta 1</li>
                <li>Karta 2</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>stopka</p>
    </footer>
    <a href="/">Wróć na stronę główną</a>
</body>
</html>