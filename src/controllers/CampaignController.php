<?php

declare(strict_types=1);

namespace App\Controller;

final class CampaignController extends AppController
{
    public function index(): void
    {
        $this->render('campaigns', [
            'pageTitle' => 'Campaigns',
        ]);
    }

    public function show(int $id): void
    {
        $this->render('game_room', [
            'pageTitle' => 'Pokój rozgrywki',
            'campaignId' => $id,
        ]);
    }
}