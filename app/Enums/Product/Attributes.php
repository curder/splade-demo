<?php
namespace App\Enums\Product;

enum Attributes: string
{
    case mfr = 'mfr';
    case color = 'color';
    case series = 'series';
    case package = 'package';
    case category = 'category';
    case material = 'material';
    case accessory_type = 'accessory_type';
    case product_status = 'product_status';
    case for_use_with_related_products = 'for_use_with/related_products';
    case base_product_number = 'base_product_number';
    case features = 'features';
    case device_size = 'device_size';
    case specifications = 'specifications';
    case type = 'type';
    case includes = 'includes';
    case interface = 'interface';
    case utilized_ic_part = 'utilized_ic_/_part';
    case convert_to_adapter_end = 'convert_to_adapter_end';
    case convert_from_adapter_end = 'convert_from_adapter_end';
    case ratings = 'ratings';
    case duration = 'duration';
    case frequency = 'frequency';
    case input_type = 'input_type';
    case technology = 'technology';
    case termination = 'termination';
    case mounting_type = 'mounting_type';
    case port_location = 'port_location';
    case voltage_range = 'voltage_range';
    case operating_mode = 'operating_mode';
    case approval_agency = 'approval_agency';
    case voltage_rated = 'voltage_-_rated';
    case current_supply = 'current_-_supply';
    case driver_circuitry = 'driver_circuitry';
    case size_dimension = 'size_/_dimension';
    case height_seated_max = 'height_-_seated_max';
    case operating_temperature = 'operating_temperature';
    case sound_pressure_level_spl = 'sound_pressure_level_spl';
    case ingress_protection = 'ingress_protection';
    case number_of_ports = 'number_of_ports';
    case impedance = 'impedance';
    case tolerance = 'tolerance';
    case applications = 'applications';
    case lead_spacing = 'lead_spacing';
    case polarization = 'polarization';
    case package_case = 'package_/_case';
    case lifetime_temp = 'lifetime_@_temp.';
    case surface_mount_land_size = 'surface_mount_land_size';
    case ripple_current_at_low_frequency = 'ripple_current_@_low_frequency';
    case ripple_current_at_high_frequency = 'ripple_current_@_high_frequency';
    case esr_equivalent_series_resistance = 'esr_equivalent_series_resistance';
}
