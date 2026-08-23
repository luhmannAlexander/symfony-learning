# 🅰️ ANGULAR ONE-PAGER: Modernes Angular auf einen Blick

## 1. KERNKONZEPTE & BEISPIELE

### 🧱 Komponenten (Das UI-Fundament)
Komponenten sind Bausteine deiner App. Sie bestehen aus HTML, CSS und TypeScript-Logik. Im modernen Angular sind sie `standalone` (keine NgModules mehr nötig).

```typescript
import { Component } from '@angular/core';

@Component({
  selector: 'app-user-card',
  standalone: true,
  template: `<h2>{{ title }}</h2>`
})
export class UserCardComponent {
  title = 'Benutzerprofil'; 
}

### 🚦 Signals (Reaktiver Zustand / State)
Der moderne Weg, um Daten zu speichern, die sich ändern können. Ändert sich ein Signal, aktualisiert Angular automatisch **nur** den genauen Teil im HTML, der diesen Wert nutzt.

```typescript
import { signal, computed } from '@angular/core';

// 1. Signal erstellen
count = signal(0);
// 2. Abgeleiteter Wert (aktualisiert sich automatisch)
doubleCount = computed(() => this.count() * 2);

// 3. Wert ändern
increment() {
  this.count.update(c => c + 1); // oder this.count.set(5)
}
```

### 🔀 Modern Control Flow (Logik im HTML)
Die neue, saubere Syntax für Bedingungen und Schleifen direkt im Template (ersetzt `*ngIf` und `*ngFor`).

```html
<!-- if / else -->
@if (isLoggedIn()) {
  <button>Logout</button>
} @else {
  <button>Login</button>
}

<!-- for loop mit empty fallback -->
@for (user of users(); track user.id) {
  <li>{{ user.name }}</li>
} @empty {
  <li>Keine Benutzer gefunden.</li>
}
```

### 💉 Services & Dependency Injection (Logik & Daten auslagern)
Services beinhalten Geschäftslogik oder API-Aufrufe. Sie werden über die Funktion `inject()` in Komponenten geladen.

```typescript
import { Injectable, inject } from '@angular/core';

@Injectable({ providedIn: 'root' })
export class ApiService {
  getUsers() { /* ... HTTP Call ... */ }
}

// In der Komponente:
export class UserComponent {
  api = inject(ApiService); // Moderner Weg!
}
```

---

## 2. WIE ALLES ZUSAMMENHÄNGT (The Big Picture)

1. Der **Service** (`ApiService`) holt Daten vom Backend (via HTTP).
2. Der **Service** oder die **Komponente** speichert diese Daten in einem **Signal** (`users = signal(...)`).
3. Die **Komponente** (`UserComponent`) nutzt **Control Flow** (`@for`), um das **Signal** im HTML zu rendern.
4. Klickt der Nutzer auf etwas, ruft das **Event Binding** (`(click)="..."`) eine Methode in der Komponente auf, die wiederum das Signal aktualisiert (`.set()` / `.update()`).
5. Angular sieht die Signal-Änderung und aktualisiert in Millisekunden die **UI**.

---

## 3. HÄUFIGE FEHLER (Pitfalls) & LÖSUNGEN

❌ **Fehler 1: Signals direkt mutieren (statt `.update()` zu nutzen)**
*Falsch:* `this.users().push(newUser);` (Angular merkt nicht, dass sich etwas geändert hat!)
*Korrekt:* `this.users.update(users => [...users, newUser]);`

❌ **Fehler 2: `track` im `@for` ignorieren oder falsch setzen**
*Das Problem:* Wenn du `@for` nutzt, ist `track` Pflicht. Wenn du z. B. `track $index` bei Listen nutzt, die sich oft verändern (löschen/sortieren), muss Angular das gesamte DOM neu rendern. Das kostet Performance.
*Korrekt:* Nutze immer eine eindeutige ID: `@for (item of items; track item.id)`

❌ **Fehler 3: Memory Leaks durch Observables (RxJS)**
*Das Problem:* Wenn du `.subscribe()` aufrufst (z.B. bei Router-Events oder HTTP) und die Komponente zerstört wird, läuft das Abo teilweise im Hintergrund weiter.
*Korrekt:* Nutze den Operator `takeUntilDestroyed()` oder wandle es direkt in ein Signal um, das sich selbst aufräumt:

```typescript
import { toSignal } from '@angular/core/rxjs-interop';

// Wandelt Observable automatisch in ein Signal um und räumt sich selbst auf!
userData = toSignal(this.http.get('/api/user')); 
```
```