# int.gundula – Relaunch

Technische Modernisierung der Künstlerinnen-Website von Niki Schawalder
(int.gundula.ch, Original von 2007, PHP/patTemplate). Das Design, die
Zeitstrahl-Navigation und alle Interaktionsmuster sind 1:1 erhalten -
nur der Unterbau ist neu.

## Stack

- [Astro](https://astro.build) als Static Site Generator - der Build erzeugt
  reines HTML/CSS ohne Laufzeit-PHP, ohne Datenbank, ohne JavaScript-Zwang.
- Inhalte als JSON-Dateien pro Projekt und Sprache (`src/content/de|en/`).
- Deployt auf jedes beliebige (Apache-)Hosting.

## Was dem Original entspricht

- 1000px-Bühne mit Hintergrundbild `trompetenflechten.jpg`, Spaltenraster
  170/296/56/180/6/23/157/112 und Zeilenhöhen 209/465/100/60 exakt wie die
  alte Layout-Tabelle (`tpl/main.tpl`).
- Zeitstrahl: 14×14px-Farbquadrate, Farben aus den alten GIFs gesampelt,
  Hover/Aktiv = roter Balken (#CC0000) mit weissem Label. Die GIF-Grafiken
  sind durch echten Text ersetzt (skalierbar, übersetzbar, zugänglich).
- Typografie: Original-Klassen (`titel16`, `fett`, `lauftext11`, ...) aus
  `stylesheet/style.css` portiert.

## Was neu ist

- Mehrsprachigkeit über URLs: `/de/<slug>/` und `/en/<slug>/`, mit
  hreflang-Alternates und Sprachumschalter im Footer. Wo englischer Inhalt
  fehlt (Projekte nach 2007), fällt die EN-Seite auf Deutsch zurück
  (im JSON mit `"fallback": "de"` markiert).
- UTF-8 statt iso-8859-1, echte typografische Zeichen.
- `public/.htaccess` leitet alle alten URLs
  (`stage/content.php?artistic=…`) per 301 auf die neuen Routen um.
- Sitemap (`@astrojs/sitemap`), Canonical-URLs, seitenspezifische Titel.
- Mobile (< 1000px, Draft für Nikis Review): dieselben Bausteine
  gestapelt - Moosbild als Kopfband, Zeitstrahl als horizontale,
  wischbare Quadratreihe (erster Tap zeigt das rote Label, zweiter
  navigiert), Papier-Content in voller Breite mit lesbarer Schrift,
  Biografie-Link und Footer darunter. Desktop ab 1000px bleibt
  pixelidentisch zum Original.

## Inhalte pflegen

Pro Projekt eine Datei `src/content/<lang>/<slug>.json` mit `title`,
`pix` (Bild-HTML), `txt` (Text-HTML). Neues Projekt: JSON in beiden
Sprachen anlegen und in `src/data/projects.ts` einen Eintrag mit Slug,
Quadratfarbe und Hover-Label ergänzen (Reihenfolge = Zeitstrahl).

Bilder nach `public/img/`, PDFs nach `public/pdf/`.

## Befehle

```bash
npm install       # einmalig
npm run dev       # Entwicklung, http://localhost:4321
npm run build     # statischer Build nach dist/
```

## Deployment

Inhalt von `dist/` (inkl. der versteckten `.htaccess`) ins Webroot des
Hostings laden. Danach kann der alte PHP-Code auf dem Server gelöscht
werden - die `.htaccess` fängt alle alten Links ab.

## Offene Punkte (Content, nicht Technik)

- Englische Texte: 2026-08-28 maschinell aus dem Deutschen übersetzt
  (Skript `scripts/en_translations.py`, in den JSON-Dateien mit
  `"translationDraft": true` markiert). Von Niki gegenlesen lassen.
  Nur `en/trimaginaziun.json` und Teile von `en/home.json` stammen aus
  dem 2007er-Original.
- Mobiles Konzept: aktuell Plakat-Skalierung, Entscheid von Niki nötig.
- `_reference/` im Projektroot enthält den statisch gerenderten Stand der
  alten Site als visuelle Referenz (generiert, kann später weg).

## Migration

`scripts/migrate_content.py` hat die alten `stage/lang_de.php` /
`lang_en.php` (via `_reference/content_extracted.json`) einmalig in die
JSON-Dateien überführt: Pfade umgeschrieben, Windows-1252-Entities durch
echte Zeichen ersetzt. Re-run überschreibt manuelle Änderungen an den
JSON-Dateien - nur bewusst ausführen.
