<?php
namespace App\Enums\Product;

enum Export: string
{
    case eccn ='eccn';
    case htsus ='htsus';
    case rohs_status = 'rohs_status';
    case reach_status = 'reach_status';
    case moisture_sensitivity_level_msl = 'moisture_sensitivity_level_msl';
    case california_prop_65 = 'california_prop_65';
}
