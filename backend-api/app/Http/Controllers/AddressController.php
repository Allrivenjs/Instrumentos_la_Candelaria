<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Models\Address;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;

/**
 * @group Address Management
 *
 * APIs to manage the product resource
 *
 */

class AddressController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function index(){
        return (DataResource::collection(auth()->user()->address))->response()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function getCountries(){
        return (new DataResource(Country::all()))->response()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * @param $country
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function getState($country){
        try {
            return (new DataResource(State::query()->where('country_id', $country)->get()))->response()->setStatusCode(Response::HTTP_OK);
        }catch (\Throwable $e){
            return response()->json()->setStatusCode(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function store(Request $request){
        $request->validate([
                'address'=>'required',
                'zipcode'=>'required',
                'reference'=>'string',
                'city'=>'required',
                'countries_id'=>'required',
                'states_id'=>'required',
            ]);
        Address::create([
            'address'=>$request->input('address'),
            'zipcode'=>$request->input('zipcode'),
            'reference'=>$request->input('reference'),
            'city'=>$request->input('city'),
            'countries_id'=>$request->input('countries_id'),
            'states_id'=>$request->input('states_id'),
            'user_id' => auth()->user()->getAuthIdentifier()
        ]);
        return response()->json()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * @param Request $request
     * @param Address $address
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function update(Request $request, Address $address)
    {
        $request->validate([
            'address'=>'required',
            'zipcode'=>'required',
            'reference'=>'string',
            'city'=>'required',
            'countries_id'=>'required',
            'states_id'=>'required',
        ]);
        try {
            $address->update([
                'address'=>$request->input('address'),
                'zipcode'=>$request->input('zipcode'),
                'reference'=>$request->input('reference'),
                'city'=>$request->input('city'),
                'countries_id'=>$request->input('countries_id'),
                'states_id'=>$request->input('states_id'),
            ]);
        }catch (\Throwable $e){
            return response()->json()->setStatusCode(Response::HTTP_NOT_FOUND);
        }
        return response()->json()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * @param Address $address
     * @return \Illuminate\Http\JsonResponse|object
     * @throws \Throwable
     */
    public function destroy(Address $address){
        $address->deleteOrFail();
        return response()->json()->setStatusCode(Response::HTTP_OK);
    }
}
