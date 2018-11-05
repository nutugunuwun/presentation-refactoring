<?php

include_once 'vendor/autoload.php';

use App\Movie;
use App\Rental;
use App\Customer;

$customer = new Customer('Elizabeth');

$movie = new Movie('Depan Bisa Belakang Bisa', 1);
$rental = new Rental($movie, 2);
$customer->addRental($rental);

$movie = new Movie('Maju Kena Mundur Kena', 0);
$rental = new Rental($movie, 5);
$customer->addRental($rental);

echo $customer->statement() . PHP_EOL;
