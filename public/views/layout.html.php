<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= htmlspecialchars($pageTitle ?? 'Aplikacja', ENT_QUOTES, 'UTF-8') ?>
    </title>

    <link rel="stylesheet" href="/css/style.css">
    <?php foreach ($stylesheets ?? [] as $stylesheet): ?>
        <link rel="stylesheet" href="<?= htmlspecialchars($stylesheet, ENT_QUOTES, 'UTF-8') ?>">
    <?php endforeach; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
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
</body>
</html>