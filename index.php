<?php
require 'vendor/autoload.php';

$stock = new \Inventory\Stock();

//Adding product to stock
$stock->add(new \Products\SoftwareEng(), 5);
$stock->add(new \Products\AsusLaptop(), 1);

// Shopping
$invoice = new \Inventory\Invoice($stock);
$invoice->add(new \Products\SoftwareEng());
$invoice->add(new \Products\AsusLaptop());

$invoice->addOffer(new \Offers\Summer());
$invoice->addUser(new \User\Sabbir());

print_r($invoice->voucer());

print_r($invoice->grandTotal());
echo '<br>';
print_r($invoice->discount());
// You can see our Stock updated
print_r($stock);
