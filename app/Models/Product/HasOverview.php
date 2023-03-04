<?php
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

/**
 * @property string $name
 * @property string $pdf_url
 * @property string $description
 * @property string $manufacturer
 * @property string $detailed_description
 * @property string $manufacturer_product_number
 * @property string $manufacturer_standard_lead_time
 * @property \Illuminate\Support\Collection $overview
 */
trait HasOverview
{
    public function name(): Attribute
    {
        return Attribute::get(fn () => $this->overview('name'));
    }
    public function pdfUrl(): Attribute
    {
        return Attribute::get(fn () => $this->overview('pdf_url'));
    }

    public function description(): Attribute
    {
        return Attribute::get(fn () => $this->overview('description'));
    }

    public function manufacturer(): Attribute
    {
        return Attribute::get(fn () => $this->overview('manufacturer'));
    }
    public function detailedDescription(): Attribute
    {
        return Attribute::get(fn () => $this->overview('detailed_description'));
    }
    public function manufacturerStandardLeadTime() : Attribute
    {
        return Attribute::get(fn () => $this->overview('manufacturer_standard_lead_time'));
    }

    public function manufacturerProductNumber(): Attribute
    {
        return Attribute::get(fn () => $this->overview('manufacturer_product_number'));
    }
    /**
     * @param $column
     *
     * @return array|\ArrayAccess|mixed
     */
    protected function overview($column)
    {
        return Arr::get($this->overview, $column);
    }
}
