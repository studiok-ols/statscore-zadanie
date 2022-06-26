<?php
namespace App;
require_once 'GildedRoseGoods.php';
class Backstage extends \App\GildedRoseGoods
{
    public $name = 'Backstage passes to a TAFKAL80ETC concert';

    public function updateQuality()
    {
        // TODO: Implement updateQuality() method.
        $this->quality<50 ? $this->quality++ : $this->quality;

        $this->sell_in<11 && $this->quality<50 ? $this->quality++ :  $this->quality;
        $this->sell_in<6 && $this->quality<50 ? $this->quality++ : $this->quality;

        $this->sell_in--;
        $this->sell_in < 0 ? $this->quality = 0 :  $this->quality;
    }
}
