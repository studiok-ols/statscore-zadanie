<?php

namespace App;

class Item
{
    public $name;
    protected $sell_in;
    protected $quality;

    public function __construct($sell_in, $quality)
    {
        //$this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

}
