
<?php
// <!-- nome repo: php-oop-2
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, 
// ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi 
// gestendo l'ereditarietà dove necessario;
// ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse 
// tipologie di prodotti.
// Provate a far interagire tra di loro gli oggetti: 
// ad esempio, l'utente dello shop inserisce una carta di credito... 
// $c = new CreditCard(..); 
// $user->insertCreditCard($c);
// BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->


require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/traits/MotoAttribute.php';
require_once __DIR__ . '/classes/Moto_1_Guzzi.php';
require_once __DIR__ . '/classes/Moto_2_Kawasaki.php';

try {
    $product = new Product('Superleggera', 12000, 'DucAti');
    $product->setDescription('500 esemplari in circolazione, 100kg, 160hp');
    echo $product->getName();
} catch (\Exception $e) {
    echo $e->getMessage();
}

var_dump($product);

$Moto_1_Guzzi = new Moto_1_Guzzi ('California1200', 16000, 'Moto Guzzi');
var_dump($Moto_1_Guzzi);
$Moto_1_Guzzi->setKeyless('Bluetooth');

?>
