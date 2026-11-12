<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AppController
{
    protected function render(string $template, array $variables = []): void
    {
        $viewsPath = dirname(__DIR__, 2) . '/public/views';
        $templatePath = $viewsPath . '/' . $template . '.html.php';
        $layoutPath = $viewsPath . '/layout.html.php';

        if (!is_file($templatePath)) {
            throw new \RuntimeException('View not found: ' . $template);
        }

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_GET['demo_login'])) {
            $_SESSION['user'] = ['name' => 'Brokk Stonehammer'];
        } elseif (isset($_GET['demo_logout'])) {
            unset($_SESSION['user']);
        }

        $currentUser = $_SESSION['user'] ?? null;
        $isLoggedIn = $currentUser !== null;
        $userName = $isLoggedIn ? ($currentUser['name'] ?? 'Adventurer') : 'User not logged in';

        $globalVariables = [
            'isLoggedIn' => $isLoggedIn,
            'userName' => $userName,
        ];

        extract(array_merge($globalVariables, $variables), EXTR_SKIP);

        ob_start();
        require $templatePath;
        $content = (string) ob_get_clean();

        require $layoutPath;
    }
}