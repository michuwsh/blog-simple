Dziękuje za zadanie rekrutacyjne - poniższy kod przedstawia moją propozycję rozwiązania zadania.
 
Jak odpalić projekt?
 
Ja używałem do tego środowiska dockerowego:
 
1. git clone https://github.com/michuwsh/blog-simple.git
 
2. cd blog-simple
 
3. Wykonaj polecenie ./vendor/bin/sail up
 
4. Docker domyślnie odpali wszystkie niezbędne kontenery do uruchomienia aplikacji
 
5. Utwórz plik .env na podstawie pliku .env_sample
 
6. W pliku .env podaj dane z nazwą bazy danych, użytkownikiem bazy oraz hasło do bazy, domyślnie na tym środowisku konfiguracja to:
 
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=simple_blog
DB_USERNAME=sail
DB_PASSWORD=password
 
Dostęp do Phpmyadmina pod adresem localhost:8080
 
Dostęp do aplikacji pod adresem: localhost
 
7. Wykonaj migrację bazy danych za pomocą php artisan migration
 
8. Dodaj przykładowe dane za pomocą polecenia php artisan db:seed PostsSeeder
 
9. Dodaj komentarze za pomocą polecenia php artisan db:seed CommentsSeeder
 
10. Usuwanie starszy komentarzy niż X dni za pomoca polecenia php artisan comments:remove X, gdzie X to ilość dni