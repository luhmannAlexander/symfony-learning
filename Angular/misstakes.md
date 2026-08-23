# ⏳ Zeitverschwender in Angular: Die 5 größten Anfänger-Fallen

## 🕳️ Falle 1: Veraltete Tutorials schauen (Das NgModule-Mysterium)
**Was passiert:** Du kaufst einen Udemy-Kurs oder schaust YouTube-Videos aus dem Jahr 2021. Du quälst dich tagelang damit, zu verstehen, was `app.module.ts` ist, wie man Komponenten "deklariert" und was `*ngIf` bedeutet.
* **Warum es passiert:** Das Internet vergisst nicht. Angular gibt es schon lange und 80 % der Tutorials da draußen basieren auf dem "alten" Angular (vor Version 15/17).
* **Was du stattdessen tun solltest:** Ignoriere alles, was `NgModule` verwendet! Lerne ausschließlich **Standalone Components**, **Signals** und den neuen **Control Flow** (`@if`, `@for`). Modernes Angular ist viel einfacher. Achte darauf, dass Tutorials explizit für Angular 17 oder neuer gemacht sind.

## 🕳️ Falle 2: Zu früh "NgRx" lernen wollen (Over-Engineering)
**Was passiert:** Du willst eine simple To-Do-Liste oder ein Login-Formular bauen. Du liest irgendwo, dass "Profis State Management mit NgRx machen". Plötzlich schreibst du Actions, Reducers, Selectors und Effects, verstehst kein Wort mehr und hast 20 Dateien für einen einfachen Button-Klick erstellt.
* **Warum es passiert:** Anfänger orientieren sich oft an Stellenausschreibungen für riesige Enterprise-Firmen. Sie denken, komplexe Werkzeuge seien eine Pflicht für jede App.
* **Was du stattdessen tun solltest:** Lass die Finger von NgRx, bis du wirklich eine riesige App baust, bei der du die Übersicht verlierst. Nutze stattdessen einfache **Services in Kombination mit Signals**. Das ist der moderne, eingebaute Weg in Angular und reicht für 95 % aller Projekte völlig aus.

## 🕳️ Falle 3: TypeScript ignorieren und überall `any` verwenden
**Was passiert:** Der Code wirft rot markierte Fehlermeldungen. Du bist genervt, weil du doch nur schnell das Design testen willst. Also schreibst du `data: any`, um TypeScript den Mund zu verbieten. Zwei Wochen später stürzt deine App ab, weil du versuchst, `.toLowerCase()` auf eine Zahl anzuwenden, und du suchst stundenlang nach dem Fehler.
* **Warum es passiert:** TypeScript wirkt anfangs wie ein nerviger Lehrer, der jeden Tippfehler anstreicht. Man will einfach schnell Ergebnisse im Browser sehen.
* **Was du stattdessen tun solltest:** Investiere am Anfang 3-4 Tage, um grundlegendes TypeScript (Interfaces, Types) zu lernen. Betrachte TypeScript nicht als Feind, sondern als deinen Assistenten. Wenn du saubere Interfaces (z. B. `interface User { name: string; age: number; }`) schreibst, schreibt sich der Angular-Code durch die Autovervollständigung danach fast von selbst.

## 🕳️ Falle 4: Sich in der "RxJS-Hölle" verirren
**Was passiert:** Du versuchst, jeden noch so kleinen Zustand deiner App als Datenstrom (Observable) abzubilden. Du verschachtelst `subscribe()` in `subscribe()`, produzierst Memory Leaks, weil du vergisst aufzuräumen, und weißt nicht mehr, was `switchMap`, `mergeMap` und `concatMap` unterscheidet.
* **Warum es passiert:** Vor der Einführung von *Signals* war RxJS (Observables) das einzige mächtige Werkzeug in Angular, um auf Änderungen zu reagieren. Anfänger wurden gezwungen, es für alles zu nutzen.
* **Was du stattdessen tun solltest:** Halte es extrem simpel. Nutze **RxJS nur noch für HTTP-Anfragen** (die Kommunikation mit dem Server) oder komplexe Timer. Sobald die Daten vom Server da sind, wandle sie sofort in ein Signal um (mit der Funktion `toSignal()`). Den gesamten Rest deiner App steuerst du nur noch über Signals.

## 🕳️ Falle 5: Die "Gott-Komponente" erschaffen
**Was passiert:** Du erstellst eine Komponente namens `DashboardComponent`. Nach drei Wochen hat die HTML-Datei 800 Zeilen und die TypeScript-Datei 1200 Zeilen. Sie kümmert sich um das Laden der Daten, das Aussehen der Buttons, die Validierung der Formulare und das Berechnen von Rabatten. Niemand blickt mehr durch.
* **Warum es passiert:** Es ist anfangs bequemer, einfach alles in eine Datei zu schreiben, anstatt sich Gedanken darüber zu machen, wie Daten zwischen verschiedenen Bausteinen hin- und herfließen.
* **Was du stattdessen tun solltest:** Nutze das Prinzip "Smart & Dumb Components" (Schlaue und dumme Bausteine).
    * **Schlaue Komponenten:** Laden Daten aus dem Service und verwalten den Zustand (State). Sie haben kaum eigenes HTML.
    * **Dumme Komponenten:** Bekommen Daten nur über `@Input()` hereingereicht, zeigen sie hübsch an und melden Klicks über `@Output()` zurück. Sie laden niemals selbst Daten.
      Sobald eine Datei länger als 200 Zeilen wird, zwinge dich, sie in kleinere Bausteine aufzuteilen.
