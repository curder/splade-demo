<?php
namespace App\Http\Controllers;

use App\Tables\Products;
use Illuminate\Contracts\View\View;

class ProductsController extends Controller
{
    public function index() : View
    {
        return view('products.index', [
            'products' => Products::class,
        ]);
    }
}
