<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\CityResource;
use App\Http\Resources\CountryResource;
use App\Models\City;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;

class PublicController extends BaseController
{
    

    public function cities(Request $request)
    {
        try{

            $cities = City::with(['country'])->where('name', 'LIKE', "$request?->name%")->take(25)->get();

            return $this->sendResponse("", CityResource::collection($cities));

        }catch(Exception $e){

            return $this->sendError("Something went wrong", [], 500);

        }
    }

    public function countries(Request $request)
    {
        try{

            $countries = Country::where('name', 'LIKE', "$request?->name%")->take(10)->get();

            return $this->sendResponse("", CountryResource::collection($countries));

        }catch(Exception $e){

            return $this->sendError("Something went wrong", [], 500);

        }
    }

}