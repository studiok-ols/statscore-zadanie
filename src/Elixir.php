<?php
namespace App;

require_once 'GildedRoseGoods.php';
class Elixir extends \App\GildedRoseGoods
{
    public $name = 'Elixir of the Mongoose';

    public function updateQuality()
    {
        // TODO: Implement updateQuality() method.

        $this->quality>0 ? $this->quality-- : $this->quality;
        $this->sell_in--;
        $this->sell_in<0 ? $this->quality-- : $this->quality;
    }
}
