<?php
namespace App\Models\Product;

use App\Enums\Product\Additional;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

/**
 * @property string $other_names
 * @property string $standard_package
 */
trait HasAdditional
{
    public function otherNames() : Attribute
    {
        return Attribute::get(fn() => $this->additional(Additional::other_names));
    }
    private function additional(Additional $column)
    {
        return Arr::get($this->additional, $column->value);
    }
    public function standardPackage() : Attribute
    {
        return Attribute::get(fn() => $this->additional(Additional::standard_package));
    }
}
