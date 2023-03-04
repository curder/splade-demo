<?php
namespace App\Enums\Product;

enum Overview: string
{
    case name = 'name';
    case pdf_url = 'pdf_url';
    case description = 'description';
    case manufacturer = 'manufacturer';
    case manufacturer_product_number = 'manufacturer_product_number';
    case manufacturer_standard_lead_time = 'manufacturer_standard_lead_time';
    case detailed_description = 'detailed_description';
}
