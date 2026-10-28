# AGENTS.md

## Cel projektu
HexTavern — aplikacja webowa w PHP 8.3 do obsługi sesji gier TTRPG online (tworzenie lobby, rzuty kośćmi, wgląd w karty postaci i notatki Mistrza Gry), zrealizowana w oparciu o autorski routing oraz wzorzec MVC w kontenerach Docker.

## Struktura
- `public/index.php` — punkt wejścia aplikacji (Front Controller), rejestracja tras i wywołanie dispatchera.
- `public/views/` — szablony widoków (`*.html.php`):
  - `layout.html.php` — bazowy układ strony wstrzykujący treść widoku (`$content`) oraz style (`$stylesheets`).
  - `home.html.php`, `login.html.php`, `campaigns.html.php`, `game_room.html.php`, `characters.html.php`, `join.html.php`, `not-found.html.php` — dedykowane widoki poszczególnych podstron.
- `public/css/` — arkusze stylów (m.in. `style.css` ze zmiennymi motywów i resetem, `login.css` itp.).
- `src/Routing.php` — router dopasowujący metody HTTP i ścieżki (z obsługą parametrów dynamicznych, np. `{id}`) oraz uruchamiający akcje kontrolerów.
- `src/controllers/` — kontrolery w namespace `App\Controller`:
  - `AppController.php` — abstrakcyjny kontroler bazowy z metodą `render()`.
  - `DefaultController.php` — obsługa strony głównej (`index`) oraz błędu 404 (`notFound`).
  - `SecurityController.php` — obsługa autoryzacji i logowania (`login`).
  - `CampaignController.php` — obsługa widoków kampanii, lobby i dołączania (`index`, `show`, `join`).
  - `CharacterController.php` — obsługa kart postaci (`index`, `show`).
- `docker/` i `docker-compose.yaml` — konfiguracja kontenerów: Nginx (`server`), PHP 8.3 FPM (`php`), PostgreSQL 16 (`db`), Mailpit oraz pgAdmin.
- `composer.json` — autoloader PSR-4 (`App\` -> `src/`, `App\Controller\` -> `src/controllers/`).

## Zasady pracy
- Zachowuj `declare(strict_types=1)` w plikach PHP.
- Nie dodawaj frameworków ani zależności bez zgody.
- Kontroler przygotowuje dane, a widok odpowiada za prezentację (renderowanie przez `AppController::render()`).
- Dane wyświetlane w HTML zabezpieczaj przez `htmlspecialchars()`.
- W stylach CSS stosuj responsywne jednostki względne, takie jak `rem` (do typografii, paddingów, marginesów, promieni zaokrągleń) oraz `vh` / `vw` / `%` (do wymiarów widoku), unikając sztywnych jednostek `px`.
- Wprowadzaj małe zmiany i nie modyfikuj plików niezwiązanych z zadaniem.

## Uruchamianie i weryfikacja
- Start: `docker compose up --build -d`
- Składnia: `docker compose exec -T php php -l ścieżka/do/pliku.php`
- Po zmianie trasy sprawdź poprawny adres i odpowiedź 404.
- Przed zakończeniem pokaż `git diff` i podsumuj zmienione pliki.

## Bezpieczeństwo
- Nie odczytuj ani nie commituj sekretów z `.env`.
- Nie wykonuj destrukcyjnych poleceń bez potwierdzenia.
- Nie zmieniaj wygenerowanych plików w `vendor/`.
