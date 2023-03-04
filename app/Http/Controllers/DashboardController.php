<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return View
     */
    public function __invoke(Request $request) : View
    {
        //        $output = collect(Attributes::cases())->map(function ($enum) {
        //            $template = <<<'DOC'
        //    public function %s() : Attribute
        //    {
        //        return Attribute::get(fn() => $this->attributes(Attributes::%s));
        //    }
        //DOC;
        //
        //            return sprintf($template, Str::camel($enum->name), $enum->name);
        //        })->implode("\n");
        //        ray($output);
        $columns = [
            'overview'   => Product::getColumns('overview'),
            'price'      => Product::getColumns('price'),
            'attributes' => Product::getColumns('attributes'),
            'export'     => Product::getColumns('export'),
            'additional' => Product::getColumns('additional'),
        ];

        return view('dashboard', compact('columns'));
    }
}
