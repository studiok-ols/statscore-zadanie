<?php
namespace App;
use \App;
spl_autoload_register(function ($class){
    $parts = explode('\\', $class);
    require_once 'src/'.end($parts).'.php';
});


$brie = new Brie(10,10);
$brie->updateQuality();
print_r($brie);

$backstage = new Backstage(10,10);
$backstage->updateQuality();
print_r($backstage);

$sulfuras = new Sulfuras(10,80);
$sulfuras->updateQuality();
print_r($sulfuras);

$elixir = new Elixir(10,10);
$elixir->updateQuality();
print_r($elixir);
