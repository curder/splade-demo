<?php
namespace App\Models\Product;

trait WithManyColumns
{
    use HasAdditional;
    use HasAttributes;
    use HasExport;
    use HasOverview;
    use HasPrice;
}
