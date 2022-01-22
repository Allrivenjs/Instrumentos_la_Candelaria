<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;

use App\Http\Resources\DataResource;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    public function index(){
        return (new DataResource(Cart::all()))->response()->setStatusCode(Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
            'quantity'=>'required|min:1'
        ]);
        $product = Product::query()->findOrFail($request->input('product_id'));
        $user = auth()->user();
        $user->Cart()->updateOrCreate(
            [
                'product_id' => $product->id
            ],
            [
                'quantity'=>$request->input('quantity')
            ]
        );
        return \response()->json()->setStatusCode(Response::HTTP_OK);

    }

    public function destroy(Cart $cart){
        $cart->deleteOrFail();
        return \response()->json()->setStatusCode(Response::HTTP_OK);
    }
}
