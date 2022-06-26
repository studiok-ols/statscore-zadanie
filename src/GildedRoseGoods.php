<?php
namespace App;
use \App;
require_once 'Item.php';

/*
 * Pozbyłem się skomplikowanej metody updateQuality() w klasie GildedRose. Metoda oprócz tego że miała mało czytelny
 * zapis z rozbudowaną logiką to przede wszystkim „blokowała” – wymuszała modyfikację wszystkich warunków logicznych
 * przy dodaniu kolejnego produktu. Wykorzystując dziedziczenie i klasę abstrakcji utworzyłem dla każdego produktu
 * oddzielną klasę. Klasa produktu ma narzucona implementację metody updateQuality() ale już w uproszczonej
 * formie – zajmuje się tylko wyliczaniem „jakości” dla danego produktu. Główny zyskiem jest to że dodanie
 * kolejnego produktu nie będzie związane z modyfikacjami klas poza dodawanym produktem i sam opis wyliczania "jakości"
 * w mojej ocenie jest prostszy.
 */
abstract class GildedRoseGoods extends Item
{
    public $name;

    public function __construct($sell_in, $quality)
    {
        parent::__construct($sell_in, $quality);
    }

    public function getSellIn()
    {
        return $this->sell_in;
    }

    public function getQuality()
    {
        return $this->quality;
    }

    abstract public function updateQuality();
}
