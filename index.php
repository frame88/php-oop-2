<!-- nome repo: php-oop-2
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, 
ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi 
gestendo l'ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse 
tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: 
ad esempio, l'utente dello shop inserisce una carta di credito... 
$c = new CreditCard(..); 
$user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
//CREAZIONE DI UNO STORE DI SCOOTER, IN CUI A SECONDA DELL'ETA' E DEI PUNTI FEDELTA' CREA UNO SCONTO

require_once __DIR__ . '/traits/scooterskills.php';
require_once __DIR__ . '/scooters/scooter.php';
require_once __DIR__ . '/scooters/user.php';

$scooter_1 = new Scooter('piaggio','ez97999');
$scooter_2 = new Scooter('honda','ef89213');
var_dump($scooter_1, $scooter_2);

$user = new User('Enzo', 58, 10298);

?>