

<aside>
    <p>boczny navbar</p>
</aside>
<main>
    <nav>
        <p>górny navbar | nr kampanii: <?= htmlspecialchars((string)$campaignId) ?></p>
        <p><a href="/campaigns/<?= $campaignId ?>/characters">Zobacz karty postaci tej kampanii</a></p>
    </nav>
    <section>
        <p>dm i lista graczy</p>
    </section>
    <section>
        <p>kości menu</p>
    </section>
    <section>
        <p>logi</p>
    </section>
</main>
<a href="/">Wróć na stronę główną</a>
