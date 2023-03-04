<?php
namespace App\Models\Product;

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
 * @property array        $nd0803977
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
        return Attribute::get(fn() => $this->price('bulk'));
    }
    public function box() : Attribute
    {
        return Attribute::get(fn() => $this->price('box'));
    }
    public function stock() : Attribute
    {
        return Attribute::get(fn() => $this->price('stock'));
    }
    public function retailPackage() : Attribute
    {
        return Attribute::get(fn() => $this->price('retail_package'));
    }
    public function tray() : Attribute
    {
        return Attribute::get(fn() => $this->price('tray'));
    }
    public function tapeAndBoxTb() : Attribute
    {
        return Attribute::get(fn() => $this->price('tape_&_box_tb'));
    }
    public function case() : Attribute
    {
        return Attribute::get(fn() => $this->price('case'));
    }
    public function sheet() : Attribute
    {
        return Attribute::get(fn() => $this->price('sheet'));
    }
    public function spool() : Attribute
    {
        return Attribute::get(fn() => $this->price('spool'));
    }
    public function nd0803977() : Attribute
    {
        return Attribute::get(fn() => $this->price('0803977-nd'));
    }
    public function cmwKit10Nd() : Attribute
    {
        return Attribute::get(fn() => $this->price('cmw-kit10-nd'));
    }
    public function nd29816134() : Attribute
    {
        return Attribute::get(fn() => $this->price('298-16134-nd'));
    }
    public function bottle() : Attribute
    {
        return Attribute::get(fn() => $this->price('bottle'));
    }
    public function ct() : Attribute
    {
        return Attribute::get(fn() => $this->price('ct'));
    }
    public function tr() : Attribute
    {
        return Attribute::get(fn() => $this->price('tr'));
    }
    public function cutTapeCt() : Attribute
    {
        return Attribute::get(fn() => $this->price('cut_tape_ct'));
    }
    public function tube() : Attribute
    {
        return Attribute::get(fn() => $this->price('tube'));
    }
    public function strip() : Attribute
    {
        return Attribute::get(fn() => $this->price('strip'));
    }
    public function digiReel() : Attribute
    {
        return Attribute::get(fn() => $this->price('digi-reel®'));
    }
    protected function price(string $column)
    {
        return Arr::get($this->price, $column);
    }
}
