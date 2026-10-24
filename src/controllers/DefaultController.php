<?php

declare(strict_types=1);

namespace App\Controller;


final class DefaultController extends AppController
{
    public function index(): void
    {
        $this->render('home', [
            'pageTitle' => 'Strona główna',
        ]);
    }

    public function login(): void //tymczasowo tutaj, potem SecureController
    {
        $this->render('login', [
            'pageTitle' => 'Logowanie do konta',
        ]);
    }

    public function characters(): void //tymczasowo tutaj, potem osobny controller chyba
    {
        $this->render('characters', [
            'pageTitle' => 'Karty postaci',
        ]);
    }

    public function notFound(): void
    {
        $this->render('not-found', [
            'pageTitle' => 'Nie znaleziono strony',
        ]);
    }
}