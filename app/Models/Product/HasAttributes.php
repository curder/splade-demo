<?php
namespace App\Models\Product;

use App\Enums\Product\Attributes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

/**
 * @property string $mfr
 */
trait HasAttributes
{
    public function mfr() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::mfr));
    }
    private function attributes(Attributes $enum)
    {
        return Arr::get($this->attributes, $enum->value);
    }
    public function color() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::color));
    }
    public function series() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::series));
    }
    public function package() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::package));
    }
    public function category() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::category));
    }
    public function material() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::material));
    }
    public function accessoryType() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::accessory_type));
    }
    public function productStatus() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::product_status));
    }
    public function forUseWithRelatedProducts() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::for_use_with_related_products));
    }
    public function baseProductNumber() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::base_product_number));
    }
    public function features() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::features));
    }
    public function deviceSize() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::device_size));
    }
    public function specifications() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::specifications));
    }
    public function type() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::type));
    }
    public function includes() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::includes));
    }
    public function interface() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::interface));
    }
    public function utilizedIcPart() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::utilized_ic_part));
    }
    public function convertToAdapterEnd() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::convert_to_adapter_end));
    }
    public function convertFromAdapterEnd() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::convert_from_adapter_end));
    }
    public function ratings() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::ratings));
    }
    public function duration() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::duration));
    }
    public function frequency() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::frequency));
    }
    public function inputType() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::input_type));
    }
    public function technology() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::technology));
    }
    public function termination() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::termination));
    }
    public function mountingType() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::mounting_type));
    }
    public function portLocation() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::port_location));
    }
    public function voltageRange() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::voltage_range));
    }
    public function operatingMode() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::operating_mode));
    }
    public function approvalAgency() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::approval_agency));
    }
    public function voltageRated() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::voltage_rated));
    }
    public function currentSupply() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::current_supply));
    }
    public function driverCircuitry() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::driver_circuitry));
    }
    public function sizeDimension() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::size_dimension));
    }
    public function heightSeatedMax() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::height_seated_max));
    }
    public function operatingTemperature() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::operating_temperature));
    }
    public function soundPressureLevelSpl() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::sound_pressure_level_spl));
    }
    public function ingressProtection() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::ingress_protection));
    }
    public function numberOfPorts() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::number_of_ports));
    }
    public function impedance() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::impedance));
    }
    public function tolerance() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::tolerance));
    }
    public function applications() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::applications));
    }
    public function leadSpacing() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::lead_spacing));
    }
    public function polarization() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::polarization));
    }
    public function packageCase() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::package_case));
    }
    public function lifetimeTemp() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::lifetime_temp));
    }
    public function surfaceMountLandSize() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::surface_mount_land_size));
    }
    public function rippleCurrentAtLowFrequency() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::ripple_current_at_low_frequency));
    }
    public function rippleCurrentAtHighFrequency() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::ripple_current_at_high_frequency));
    }
    public function esrEquivalentSeriesResistance() : Attribute
    {
        return Attribute::get(fn() => $this->attributes(enum: Attributes::esr_equivalent_series_resistance));
    }
}
