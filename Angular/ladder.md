# 📈 Die 5 Stufen der Angular-Meisterschaft

## Stufe 1: Der Tourist (Das Fundament)
*Du betrittst das Angular-Land zum ersten Mal und lernst die Sprache der Einheimischen.*

* **Was du tun können wirst:** Du verstehst, woraus Webseiten generell bestehen, kannst eine leere Angular-App auf deinem Computer starten und kleine Texte auf der Startseite verändern.
* **Was du lernen musst:**
    * Basis-HTML (Struktur) und CSS (Design).
    * JavaScript & TypeScript (Was sind Variablen, Funktionen und Typen?).
    * Die Angular CLI (Befehle wie `ng new` und `ng serve`).
* **Wie lange es dauert:** 1–3 Wochen (je nachdem, ob du schon mal programmiert hast).
* **Woran du erkennst, dass du bereit für Stufe 2 bist:** Du hast erfolgreich eine eigene App über das Terminal gestartet, den vorgefertigten Angular-Text gelöscht und durch "Hallo Welt, mein Name ist [Dein Name]" ersetzt. Du weißt, was ein `string` und ein `number` in TypeScript ist.

---

## Stufe 2: Der Handwerker (Komponenten & UI)
*Du fängst an, deine eigenen Bausteine zu gießen und eine Benutzeroberfläche zusammenzusetzen.*

* **Was du tun können wirst:** Du kannst eine einfache Webseite aus mehreren Bausteinen (z. B. Navigation, Inhalt, Fußzeile) bauen. Du kannst auf Klicks reagieren und Listen auf dem Bildschirm anzeigen.
* **Was du lernen musst:**
    * Standalone Components (wie man Bausteine baut).
    * Data Binding: Interpolation (`{{ wert }}`) und Property Binding (`[eigenschaft]="wert"`).
    * Event Binding: Auf Dinge reagieren (`(click)="tuEtwas()"`).
    * Modern Control Flow: Bedingungen (`@if`) und Schleifen (`@for`) im HTML.
* **Wie lange es dauert:** 2–4 Wochen.
* **Woran du erkennst, dass du bereit für Stufe 3 bist:** Du hast eine funktionierende, einfache To-Do-Liste gebaut. Du kannst ein Textfeld ausfüllen, auf "Speichern" klicken und das neue To-Do erscheint sofort in einer Liste auf dem Bildschirm.

---

## Stufe 3: Der Architekt (Daten, Navigation & Reaktivität)
*Deine App wird lebendig. Sie merkt sich Dinge, hat mehrere Seiten und spricht mit dem Internet.*

* **Was du tun können wirst:** Du kannst eine echte App bauen, bei der man ohne Ladebildschirm zwischen Seiten wechseln kann. Die App holt sich echte Daten von einem Server und aktualisiert sich sofort, wenn sich Daten ändern.
* **Was du lernen musst:**
    * Angular Router (Navigation zwischen verschiedenen URLs).
    * Services & Dependency Injection (Logik auslagern).
    * Angular Signals (Der moderne Weg, um sich Daten zu merken, die sich ändern – *State Management*).
    * HttpClient (Wie man Daten von fremden Servern/APIs abfragt).
* **Wie lange es dauert:** 4–6 Wochen.
* **Woran du erkennst, dass du bereit für Stufe 4 bist:** Du hast eine "Wetter-App" oder "Film-App" gebaut. Sie lädt beim Start Daten aus dem Internet, zeigt eine Liste an Filmen/Städten, und wenn man auf einen Eintrag klickt, öffnet sich eine Detailseite mit eigener URL.

---

## Stufe 4: Der Profi (Formulare, Streams & Sicherheit)
*Du schreibst Code, der im echten Berufsalltag bestehen kann. Du sicherst deine App ab und baust komplexe Nutzerinteraktionen.*

* **Was du tun können wirst:** Du kannst riesige, komplexe Eingabeformulare bauen, die dem Nutzer sofort sagen, wenn er sein Passwort falsch abgetippt hat. Du verstehst asynchrone Daten (Dinge, die Zeit brauchen) und kannst Bereiche deiner App mit einem Login schützen.
* **Was du lernen musst:**
    * Reactive Forms (Komplexe Formulare mit Validierung wie "Passwort muss 8 Zeichen lang sein").
    * RxJS / Observables (Der Umgang mit Daten-Strömen über die Zeit) und wie sie mit Signals zusammenarbeiten (`toSignal`).
    * Route Guards (Zutrittskontrollen für Seiten, z. B. nur für eingeloggte Nutzer).
    * Interceptors (Sicherheits-Ausweise an jede Server-Anfrage heften).
* **Wie lange es dauert:** 2–3 Monate.
* **Woran du erkennst, dass du bereit für Stufe 5 bist:** Du hast eine App mit einem Login-Fenster. Ein "Guard" blockiert die geheime Seite, bis man sich erfolgreich einloggt. Du hast ein komplexes Registrierungsformular gebaut, bei dem der "Senden"-Button erst klickbar wird, wenn alle Daten korrekt eingegeben wurden.

---

## Stufe 5: Der Meister & Lehrer (Skalierung, Performance & Perfektion)
*Du baust nicht nur Apps, du überlegst dir, wie sie in drei Jahren mit 50 Entwicklern noch wartbar und rasend schnell sind.*

* **Was du tun können wirst:** Du kannst riesige Unternehmens-Anwendungen (Enterprise Apps) strukturieren, die Performance perfektionieren, eigene Werkzeuge für Angular schreiben und Fehler im Schlaf finden.
* **Was du lernen musst:**
    * Fortgeschrittene Architektur (Monorepos wie Nx, Micro-Frontends).
    * Server-Side Rendering (SSR) & Hydration (Damit die App bei Google besser gefunden wird und schneller lädt).
    * Eigene Directives und Pipes schreiben.
    * Testing (Unit-Tests mit Jest/Jasmine, End-to-End Tests mit Playwright/Cypress).
    * Change Detection im Detail verstehen (Wie Angular unter der Haube rechnet).
* **Wie lange es dauert:** Kontinuierliche Praxis über Monate und Jahre.
* **Woran du erkennst, dass du diese Stufe erreicht hast:** Kollegen kommen zu dir, wenn sie Architektur-Probleme haben. Du musst bei Konzepten wie *Dependency Injection* oder *RxJS switchMap* nicht mehr googeln, sondern greifst zu einem Stift und kannst sie einem Anfänger fehlerfrei und verständlich auf einem Blatt Papier erklären. Du "könntest es unterrichten."
