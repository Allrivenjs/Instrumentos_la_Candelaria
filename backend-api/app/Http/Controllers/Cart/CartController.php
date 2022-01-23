<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;

use App\Http\Resources\DataResource;
use App\Models\Cart;
use App\Models\Product;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * @group Cart Management
 * @access False
 * APIs to manage the categories resource
 * <aside>You must log in to be able to save your products in the cart, if you are not logged in, you can save the collection of items in cookie </aside>
 *
 */
class CartController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function index(){
        return (new DataResource(auth()->user()->Cart))->response()->setStatusCode(Response::HTTP_OK);
    }


    /**
     * Store Cart and update.
     * <aside>This endpoint works to create and update a user's product.</aside>
     *
     * @param \Illuminate\Http\Request  $request
     * @bodyParam product_id int required Product id Example: 1
     * @bodyParam quantity int required Product quantity, min 1 Example: 1
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function store(Request $request)
    {
       $request->validate([
           // Product id
            'product_id'=>'required',
            //Product quantity, min 1.
            'quantity'=>'required|min:1'
        ]);
        $product = Product::query()->findOrFail($request->input('product_id'));
        auth()->user()->Cart()->updateOrCreate(
            [
                'product_id' => $product->id
            ],
            [
                'quantity'=>$request->input('quantity')
            ]
        );
        return \response()->json()->setStatusCode(Response::HTTP_OK);

    }

    /**
     * Remove product from cart
     * @param Cart $cart
     * @return \Illuminate\Http\JsonResponse|object
     * @throws \Throwable
     */
    public function destroy(Cart $cart){
        $cart->deleteOrFail();
        return \response()->json()->setStatusCode(Response::HTTP_OK);
    }
}
