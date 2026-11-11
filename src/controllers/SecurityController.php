<?php

declare(strict_types=1);

namespace App\Controller;


final class SecurityController extends AppController
{
    public function login(): void
    {
        $this->render('login', [
            'pageTitle' => 'Logowanie do konta',
        ]);
    }

    public function register(): void
    {
        $this->render('register', [
            'pageTitle' => 'Rejestracja konta',
        ]);
    }

    public function forgotPassword(): void
    {
        $this->render('forgot-password', [
            'pageTitle' => 'Odzyskiwanie hasła',
        ]);
    }

    public function resetPassword(): void
    {
        $this->render('reset-password', [
            'pageTitle' => 'Ustawienie nowego hasła',
        ]);
    }
}