<?php
namespace App\Models\Product;

use App\Enums\Product\Export;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

/**
 * @property string $eccn
 * @property string $htsus
 * @property string $rohs_status
 * @property string $reach_status
 * @property string $moisture_sensitivity_level_msl
 * @property string $california_prop_65
 */
trait HasExport
{
    public function eccn() : Attribute
    {
        return Attribute::get(fn() => $this->export(Export::eccn));
    }
    private function export(Export $column)
    {
        return Arr::get($this->export, $column->value);
    }
    public function htsus() : Attribute
    {
        return Attribute::get(fn() => $this->export(Export::htsus));
    }
    public function rohsStatus() : Attribute
    {
        return Attribute::get(fn() => $this->export(Export::rohs_status));
    }
    public function reachStatus() : Attribute
    {
        return Attribute::get(fn() => $this->export(Export::reach_status));
    }
    public function moistureSensitivityLevelMsl() : Attribute
    {
        return Attribute::get(fn() => $this->export(Export::moisture_sensitivity_level_msl));
    }
    public function californiaProp65() : Attribute
    {
        return Attribute::get(fn() => $this->export(Export::california_prop_65));
    }
}
