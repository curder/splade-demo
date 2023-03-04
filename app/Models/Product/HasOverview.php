<?php
namespace App\Models\Product;

use App\Enums\Product\Overview;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

/**
 * @property string                         $name
 * @property string                         $pdf_url
 * @property string                         $description
 * @property string                         $manufacturer
 * @property string                         $detailed_description
 * @property string                         $manufacturer_product_number
 * @property string                         $manufacturer_standard_lead_time
 * @property \Illuminate\Support\Collection $overview
 */
trait HasOverview
{
    public function name() : Attribute
    {
        return Attribute::get(fn() => $this->overview(Overview::name));
    }
    private function overview(Overview $column)
    {
        return Arr::get($this->overview, $column->value);
    }
    public function pdfUrl() : Attribute
    {
        return Attribute::get(fn() => $this->overview(Overview::pdf_url));
    }
    public function description() : Attribute
    {
        return Attribute::get(fn() => $this->overview(Overview::description));
    }
    public function manufacturer() : Attribute
    {
        return Attribute::get(fn() => $this->overview(Overview::manufacturer));
    }
    public function detailedDescription() : Attribute
    {
        return Attribute::get(fn() => $this->overview(Overview::detailed_description));
    }
    public function manufacturerStandardLeadTime() : Attribute
    {
        return Attribute::get(fn() => $this->overview(Overview::manufacturer_standard_lead_time));
    }
    public function manufacturerProductNumber() : Attribute
    {
        return Attribute::get(fn() => $this->overview(Overview::manufacturer_product_number));
    }
}
