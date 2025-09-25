<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    /**
     * Has One Through Relationship.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function viewCities(Request $request)
    {
        $cities = new \stdClass();
        $countries = Country::get();
        if (isset($request->county)) {
            $cities = Country::where('id', $request->county)->with('cities')->first();
            $cities = $cities->cities;
        }
        return view('has_one_through', compact('countries', 'cities'));
    }

    /**
     * Has Many Through Relationship.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function viewMultipleCities(Request $request)
    {
        $cities = new \stdClass();
        $countries = Country::get();
        if (isset($request->county)) {
            $cities = Country::where('id', $request->county)->with('multipleCities')->first();
            $cities = $cities->multipleCities;
        }
        return view('has_many_through', compact('countries', 'cities'));
    }
}
