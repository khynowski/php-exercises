## Folder Structure

1. app/Http/Controllers
    - Tutaj leżą Kontrolery. 
    - Kontroler to "kierownik ruchu". Odbiera żądanie (Request) i decyduje co zrobić (pobrać dane z bazy, wyświetlić widok). To tu będziesz pisał logikę "co zrobić jak user kliknie przycisk".
2. app/Models
    - To jest serce aplikacji - Eloquent ORM
    - Plik User.php reprezentuje tabelę users w bazie danych.
    - Jeśli stworzysz tabelę products, stworzysz tutaj plik Product.php.
    - Dzięki temu będziesz pisał: Product::all() zamiast SELECT * FROM products.
3. config
    - Pliki konfiguracyjne. Od nazwy aplikacji po sesje, maile, kolejki
4. database/migrations
    - Pliki do utworzenia deafultowej bazy danych.
    - Każda zmiana w bazie to nowy plik migracji.
    - Dzięki temu kolega z zespołu ma taką samą bazę jak Ty.
5. public
    - Jedyny folder widoczny dla świata. Tu lądują też obrazki, CSS i JS. Reszta kodu jest ukryta.
6. resources/views
    - Pliki .blade.php. HTML wymieszany z PHP (ale ładniejszy). To jest to, co widzi użytkownik.
7. routes
    - Tu decydujesz: "Jak user wpisze /home, to uruchom HomeController".
8. storage
    - To jest magazyn roboczy Laravela.
    - storage/logs: Tu lądują błędy (laravel.log). Jak coś nie działa - patrzysz tutaj.
    - storage/app: Tu zapisujesz pliki uploadowane przez userów (np. awatary).
    - storage/framework: Tu Laravel trzyma cache, skompilowane widoki.
9. tests
    - Folder do tworzenia testów (Feature i Unit)
10. vendor
    - Folder Composera. Nie dotykać.