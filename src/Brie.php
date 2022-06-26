<?php
namespace App;

require_once 'GildedRoseGoods.php';
final class Brie extends \App\GildedRoseGoods
{
    public $name = 'Aged Brie';

    public function updateQuality()
    {
        // TODO: Implement updateQuality() method.
        $this->quality<50 ? $this->quality++ : $this->quality;
        $this->sell_in--;

        $this->sell_in<0 && $this->quality<50 ? $this->quality++ : $this->quality;
    }
}
