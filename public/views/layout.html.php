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
    <script src="https://kit.fontawesome.com/8fd9367667.js" crossorigin="anonymous"></script>
</head>
<body>
    <?= $content ?>
    <footer class="app-footer">
        <p>HexTavern</p>
    </footer>
</body>
</html>