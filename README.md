# WebApp-Laravel
Currency-converter met Laravel.

Dit is mijn currency converter gemaakt met behulp van het framework Laravel. 
Ik ben eenvoudig begonnen zonder Laravel maar het begon al snel onduidelijk en veel code te worden. 
Daarom heb ik ervoor gekozen om opnieuw te beginnen in Laravel.
Mijn code werd steeds eenvoudiger en leesbaarder hoe meer ik de functies van Laravel begon te gebruiken.

De werking is vrij eenvoudig, je kiest eender welke currency uit de database
en vervolgens de currency naar waar je wilt converteren.
Daarna krijg je de output te zien met de benaming van de currency.
Ik heb niet zoveel tijd gespendeerd aan de opmaak van de HTML code dus deze moet later nog verbeteterd worden.

Later zou ik mijn code nog willen vereenvoudigen door meer functies van Laravel te gebruiken
zoals Models en Controllers.

# Eerste gebruik voorbereiden na clonen

Maak een nieuwe .env file aan en configureer deze.
Na het clonen voer je best 'composer install' uit.
Na het configureren van de .env file voer je 'php artisan key:generate' uit.
Vervolgens doe je 'php artisan migrate' om de vereiste tabellen aan te maken.
Om de juiste inhoud te hebben doe je 'php artisan db:seed --class=CurrenciesTableSeeder'.
Tenslotte voer je 'php artisan serve' uit.


## Fouten en oplossingen
Bij nieuwe clone, commando: 'composer install' uitvoeren

Bij exception fout van eerste php artisan serve een nieuwe key generaten: 'php artisan key:generate


## 2017-05-03

+ Laravel project aangemaakt en op Github gepost

## 2017-05-7

+ Eenvoudige html om te testen gemaakt

## 2017-05-9

+ Migrations en seeders aangemaakt

## 2017-05-10

+ Fout met migrations opgelost
+ PHP toegevoegd
+ Met behulp van de Query builder bedragen uit de currency database gehaald

## 2017-05-11

+ Testen met routes om applicatie een output te geven zonder foutmeldingen
+ De input van de form verwerken
+ Werkend resultaat door input en gegevens database te vermenigvuldigen
+ Nieuwe currency GBP deels toegevoegd

## 2017-05-12

+ GBP volledig toegevoegd
+ Betere input namen gekozen

## 2017-05-13

+ Poging om begin currency ook te kunnen kiezen ipv enkel van euro

## 2017-05-14

+ Werkende manier om eender welke begin currency te kunnen kiezen
+ Zorgen dat de currency naam achter het bedrag komt in de output
+ Indian rupees, japanese yen, australian dollar en swiss franc toegevoegd
+ Afkrotingen in routes uit database halen ipv hardcoded
+ Eindeloze if functies vereenvoudigd naar 2 eenvoudige if functies
+ Canadian dollar en chinese yuan toegevoegd aan currencies


