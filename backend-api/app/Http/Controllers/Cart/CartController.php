<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;

use App\Models\Product;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
            'quantity'=>'required|min:1'
        ]);
        $product = Product::query()->findOrFail($request->input('product_id'));

        return response()->setStatusCode(Response::HTTP_OK);

    }
}
