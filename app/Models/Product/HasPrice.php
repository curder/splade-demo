<?php
namespace App\Models\Product;

use App\Enums\Product\Price;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

/**
 * @property array        $bulk
 * @property array        $box
 * @property string       $stock
 * @property array        $retail_package
 * @property array        $bag
 * @property array        $tray
 * @property array        $tape_and_box_tb
 * @property array        $case
 * @property array        $sheet
 * @property array        $spool
 * @property array        $nd_0803977
 * @property array        $cmw_kit10_nd
 * @property array        $nd_298_16134
 * @property array        $bottle
 * @property array<array> $ct
 * @property array        $tr
 * @property array        $cut_tape_ct
 * @property array        $tube
 * @property array        $strip
 * @property array        $digi_reel
 */
trait HasPrice
{
    public function bulk() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::bulk));
    }
    private function price(Price $column)
    {
        return Arr::get($this->price, $column->value);
    }
    public function box() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::box));
    }
    public function stock() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::stock));
    }
    public function retailPackage() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::retail_package));
    }
    public function tray() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::tray));
    }
    public function tapeAndBoxTb() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::tape_and_box_tb));
    }
    public function case() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::case));
    }
    public function sheet() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::sheet));
    }
    public function spool() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::spool));
    }
    public function nd0803977() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::nd_0803977));
    }
    public function cmwKit10Nd() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::cmw_kit10_nd));
    }
    public function nd29816134() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::nd_29816134));
    }
    public function bottle() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::bottle));
    }
    public function ct() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::ct));
    }
    public function tr() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::tr));
    }
    public function cutTapeCt() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::cut_tape_ct));
    }
    public function tube() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::tube));
    }
    public function strip() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::strip));
    }
    public function digiReel() : Attribute
    {
        return Attribute::get(fn() => $this->price(Price::digi_reel));
    }
}
