<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
/**
 * @group Product Management
 *
 * APIs to manage the product resource
 *
 */

class ProductController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth:api'])->except('index', 'show');
    }

    /**
     * Desplay a listing of products
     *
     * Gets a list of users
     *
     *@unauthenticated
     *
     * @return \Illuminate\Http\JsonResponse|ResourceCollection|object
     *
     */
    public function index()
    {
        return (ProductResource::collection(Product::with(['user', 'images'])->paginate(8)))->response()
        ->setStatusCode(Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     * @bodyParam images file[] 📷 📸 You can upload several images related to the product
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|ResourceCollection|object
     */
    public function store(ProductRequest $request)
    {

        $sku= substr($request->name, 0, 4) . rand(10000, 99999);
        $slug=Str::slug($request->name .'-'. rand());
        $thumbnail='storage/' . Storage::put('product', $request->file('thumbnail'));
        $product=Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'weight'=>$request->weight,
            'stock'=>$request->stock,
            'sku'=>$sku,
            'thumbnail'=>$thumbnail,
            'slug'=>$slug,
            'user_id'=>User::all()->random()->id
        ]);
        if ($request->file('images')){
            if (is_array($request->file('images'))){
                foreach ($request->file('images') as $image){
                    $url  = Storage::put('product', $image);
                    $product->images()->create([
                        'url'=>'storage/' . $url,
                    ]);
                }
            }else{
                $url  = Storage::put('product', $request->file('images'));
                $product->images()->create([
                    'url'=>'storage/' . $url,
                ]);
            }

        }
        return (new ProductResource($product))->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     * @urlParam id int required Defaults to 'id'. Example: 1 Required
     * @param  \App\Models\Product  $product
     * @unauthenticated
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|object
     */
    public function show(Product $product)
    {
        return (new ProductResource($product))->response()
            ->setStatusCode(Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     * @urlParam id int required Defaults to 'id'. Example: 1 Required
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|object
     */
    public function update(ProductRequest $request, Product $product)
    {

        if ($request->file('thumbnail')){
            Storage::delete(substr($product->thumbnail, 8 , null));
            $thumbnail='storage/' . Storage::put('product', $request->file('thumbnail'));
            $product->update([
                'thumbnail'=>$thumbnail,
            ]);
        }

        $product->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'weight'=>$request->weight,
            'stock'=>$request->stock,

        ]);
        return (new ProductResource($product))->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|int|object
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return \response()->json()->setStatusCode(Response::HTTP_OK);
    }
}
