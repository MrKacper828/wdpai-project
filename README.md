# HexTavern

Strona oferuje darmowe tworzenie lobby do sesji online w gry TTRPG (Tabletop Role-Playing Game). Pozwala na posiadanie lobby gdzie widoczne są rzuty kości wszystkich graczy i dm-a (Dungeon Master), gracze mogą również zobaczyć podstawowe statystyki swoich kompanów, a dm ma możliwość pełnego wglądu w karty postaci bądź swoje notatki. 

## Funkcje

| Obszar | Co robi |
|---|---|
| Strona startowa | Możliwość wyboru czy jesteś graczem czy dm-em. |
| Strona dołączania do lobby gracza | Gracze dołączają do lobby za pomocą kodu bez konta. |
| Strona logowania dm-a | To dm musi tworzyć konto i to on zapisuje stan gry. |
| Strona z listą zapisanych kampanii dm-a | Pozwala to dm-om na prowadzenie większej ilości kampanii. |
| Strona główna z "stołem" do rozgrywki | Tutaj gracze widzą siebie nawzajem, mogą rzucać kośćmi, bądź podglądać karty postaci. |
| Strona z kartami postaci dla dm-a | Dm ma pełny wgląd w karty postaci graczy z podziałem na kampanie, jak i swoje customowe karty. |

## Tech stack

| Warstwa | Technologie |
|---|---|
| Backend | PHP 8.3 |
| Serwer HTTP | Nginx |
| Konteneryzacja | Docker Compose |

## Szybki start

```bash
git clone https://github.com/MrKacper828/wdpai-project.git
cd REPOZYTORIUM
docker compose up --build -d
```

Aplikacja: http://localhost:8080

## Struktura projektu

Krótki opis najważniejszych katalogów.

## Zasady developmentu

- Branch dla każdej funkcji.
- Małe, logiczne commity.
- Sekrety wyłącznie w .env.

## Autorzy

- Kacper Korpacki
