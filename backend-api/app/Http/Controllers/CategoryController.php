<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\DataResource;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;



/**
 * @group Category Management
 *
 * APIs to manage the categories resource
 *
 */
class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:api'])->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *@unauthenticated
     * @return \Illuminate\Http\Response
     */
    public function index(): \Illuminate\Http\Response
    {
        return response(new DataResource(Category::all()))->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|object
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return (new DataResource($category))->response()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *@unauthenticated
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|object
     */
    public function show(Category $category)
    {
        return (new DataResource($category))->response()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     * @urlParam id int required Defaults to 'id'. Example: 1 Required
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|object
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        return (new DataResource($category->update([
            'name'=>$request->name,
            'description'=>$request->description,
            ])))->response()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return \response()->setStatusCode(Response::HTTP_OK);
    }
}
