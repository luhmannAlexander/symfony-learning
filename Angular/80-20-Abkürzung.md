# Angular in 20 Stunden: Der Crashkurs-Lernplan

Dieser intensive 20-Stunden-Plan konzentriert sich auf das Wesentliche im modernen Angular (Fokus auf Version 17+, inkl. Standalone Components, Signals und neuem Control Flow).

Jeder der **10 Blöcke dauert 2 Stunden** (1 Stunde 45 Minuten Lernzeit/Praxis + 15 Minuten Überprüfung).

---

## Block 1: Einführung, Setup & Angular CLI

- **Was gelernt werden soll:** Grundlagen von TypeScript (kurz), Installation von Node.js und der Angular CLI, Erstellen des ersten Projekts, Verstehen der Ordnerstruktur und Einführung in Standalone Components.
- **Lernressource:** Offizielle Doku [angular.dev/tutorials/learn-angular](https://angular.dev/tutorials/learn-angular) (Schritte 1-3) oder ein aktuelles YouTube-Video "Angular 17/18 Crash Course" (die ersten 30 Min).
- **15-Minuten-Überprüfung:** Erstelle ein neues Angular-Projekt über die Kommandozeile (`ng new my-app`), starte den Entwicklungsserver (`ng serve`) und ändere den Text auf der Startseite zu "Hallo, Angular!".

## Block 2: Komponenten & Data Binding

- **Was gelernt werden soll:** Wie man Komponenten erstellt (`ng g c name`), String Interpolation (`{{ value }}`), Property Binding (`[property]="value"`) und Event Binding (`(click)="doSomething()"`).
- **Lernressource:** [angular.dev/guide/components](https://angular.dev/guide/components) und die Sektion über Templates.
- **15-Minuten-Überprüfung:** Erstelle eine Komponente "Profil". Lege eine Variable `username` an und zeige sie im HTML an. Füge einen Button hinzu, der bei Klick den Namen zu "Max Mustermann" ändert.

## Block 3: Modernes Control Flow (Bedingungen & Listen)

- **Was gelernt werden soll:** Das neue Angular Control Flow System: `@if`, `@else`, `@for` und `@empty`. (Vergiss die alten `*ngIf` und `*ngFor`, konzentriere dich auf die moderne Syntax).
- **Lernressource:** [angular.dev/guide/templates/control-flow](https://angular.dev/guide/templates/control-flow).
- **15-Minuten-Überprüfung:** Lege ein Array mit drei Früchten im TypeScript-Code an. Nutze `@for`, um sie als Liste (Unordered List) auszugeben. Nutze `@if`, um einen Text "Liste ist leer" anzuzeigen, falls das Array leer ist.

## Block 4: Modernes State Management mit Signals

- **Was gelernt werden soll:** Angular Signals (`signal`, `computed`, `effect`), der moderne Weg, um Zustände (State) in Angular reaktiv zu verwalten.
- **Lernressource:** [angular.dev/guide/signals](https://angular.dev/guide/signals).
- **15-Minuten-Überprüfung:** Erstelle einen einfachen Zähler (Counter). Definiere ein Signal `count`. Zeige den Wert im HTML an und erstelle zwei Buttons, die das Signal über `.update()` erhöhen bzw. verringern.

## Block 5: Services & Dependency Injection (DI)

- **Was gelernt werden soll:** Warum man Logik aus Komponenten auslagern sollte. Erstellen von Services (`ng g s name`), der `@Injectable`-Decorator und wie man Services in Komponenten einbindet (über die moderne `inject()`-Funktion).
- **Lernressource:** [angular.dev/guide/di](https://angular.dev/guide/di).
- **15-Minuten-Überprüfung:** Erstelle einen `MathService` mit einer Methode `add(a, b)`. Injiziere diesen Service in eine Komponente und nutze ihn, um zwei Zahlen zu addieren und das Ergebnis auf dem Bildschirm anzuzeigen.

## Block 6: Routing & Navigation (Single Page Application)

- **Was gelernt werden soll:** Konfiguration von Routen in der `app.routes.ts`, Verwendung von `<router-outlet>`, Navigation mit der `routerLink`-Direktive statt normaler `href`-Links.
- **Lernressource:** [angular.dev/guide/routing](https://angular.dev/guide/routing).
- **15-Minuten-Überprüfung:** Erstelle zwei Komponenten: `Home` und `About`. Konfiguriere die Routen so, dass `/` zu Home führt und `/about` zu About. Füge eine Navigationsleiste mit `routerLink` hinzu und wechsle zwischen den Seiten.

## Block 7: HTTP Client (Datenabfrage)

- **Was gelernt werden soll:** Einrichten des `provideHttpClient` in der `app.config.ts`. Durchführen von GET-Requests, um Daten von einer API zu laden. Umwandeln von Observables in Signals (`toSignal`).
- **Lernressource:** [angular.dev/guide/http](https://angular.dev/guide/http) (Fokus auf "Making requests").
- **15-Minuten-Überprüfung:** Nutze die kostenlose API `jsonplaceholder.typicode.com/users`. Schreibe einen Service, der die Liste der Nutzer abruft. Zeige die Namen der Nutzer in einer Komponente an.

## Block 8: Formulare (Reactive Forms)

- **Was gelernt werden soll:** Der moderne Weg, Formulare zu bauen: `FormControl`, `FormGroup`, `ReactiveFormsModule`. Auslesen von Werten und einfache Validierung (z. B. Pflichtfelder).
- **Lernressource:** [angular.dev/guide/forms/reactive-forms](https://angular.dev/guide/forms/reactive-forms).
- **15-Minuten-Überprüfung:** Baue ein einfaches Login-Formular (E-Mail, Passwort). Mache beide Felder zum Pflichtfeld (`Validators.required`). Deaktiviere den "Absenden"-Button, solange das Formular ungültig ist (`[disabled]="!form.valid"`).

## Block 9: RxJS Grundlagen (Observables)

- **Was gelernt werden soll:** Obwohl Angular stark auf Signals setzt, ist RxJS weiterhin wichtig (besonders für Router-Events und HTTP). Lerne was Observables sind, wie man sie abonniert (`subscribe()`) und die `AsyncPipe`.
- **Lernressource:** YouTube-Video nach Wahl zum Thema "RxJS Crash Course Angular" (z.B. von Fireship oder Academind - nur die Basics wie `map` und `filter`).
- **15-Minuten-Überprüfung:** Erstelle ein einfaches Observable mit `of(1, 2, 3)`. Abonniere es in der Komponente (`ngOnInit`), multipliziere die Werte mit 2 und logge die Ergebnisse in die Konsole.

## Block 10: Das Mini-Projekt (Alles zusammenführen)

- **Was gelernt werden soll:** Integration aller Konzepte. Architektur einer kleinen Anwendung planen und umsetzen.
- **Lernressource:** Dein eigenes Wissen aus den vorherigen Blöcken (Doku als Nachschlagewerk).
- **15-Minuten-Überprüfung (Refactoring & Code Review):**
    - *Aufgabe für die ersten 105 Minuten:* Baue eine "To-Do-App" mit Routing (Seite 1: Liste, Seite 2: Über das Projekt). Die Liste speichert Daten in einem Service via Signals. Nutze Reactive Forms für das Eingabefeld.
    - *Letzte 15 Minuten:* Teste die App auf Bugs. Bereinige ungenutzte Imports und überprüfe, ob du das moderne Control Flow (`@for`, `@if`) und `inject()` konsequent angewendet hast.

---

> **Tipp für den Erfolg:** Angular lernt man am besten durch Tippen, nicht nur durch Lesen. Schreibe den Code bei jedem Schritt selbst mit, statt ihn zu kopieren!
