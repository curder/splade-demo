<?php
namespace App\Enums\Product;

enum Price: string
{
    case bulk = 'bulk';
    case stock = 'stock';
    case box = 'box';
    case retail_package = 'retail_package';
    case bag = 'bag';
    case tray = 'tray';
    case tape_and_box_tb = 'tape_&_box_tb';
    case case = 'case';
    case sheet = 'sheet';
    case spool = 'spool';
    case nd_0803977 = '0803977-nd';
    case cmw_kit10_nd = 'cmw-kit10-nd';
    case nd_29816134 = '298-16134-nd';
    case bottle = 'bottle';
    case ct = 'ct';
    case tr = 'tr';
    case cut_tape_ct = 'cut_tape_ct';
    case tube = 'tube';
    case strip = 'strip';
    case digi_reel = 'digi-reel®';
    case nd_1120110031 = '1120110031-nd';
}
