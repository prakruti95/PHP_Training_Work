<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Dealers;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function getBrandsData(Request $request)
    {
        /**
         * This function is an example of one to one relationship.
         */
        $data = Brands::with('dealers')->get()->toArray();
        echo "<pre>";
        print_r($data);
        exit;
        return true;
    }

    /**
     * This function is an example of one to many relationship.
     */
    public function getBrandsManyData(Request $request)
    {
        $data = Brands::with('manyDealers')->get()->toArray();
        echo "<pre>";
        print_r($data);
        exit;
        return true;
    }

    /**
     * This function is an example of one to one relationship.
     */
    public function getDealersData(Request $request)
    {
        $data = Dealers::with('brands')->get()->toArray();
        echo "<pre>";
        print_r($data);
        exit;
        return true;
    }

    /**
     * This function is an example of many to many relationship.
     * @param Request $request
     */
    public function belogsToManyBrands(Request $request)
    {
        $data = Dealers::with('belogsToManyBrands')->get()->toArray();
        echo "<pre>";
        print_r($data);
        exit;
        return true;
    }

    /**
     * This function is an example of many to many relationship.
     * @param Request $request
     */
    public function belogsToManyDealers(Request $request)
    {
        $data = Brands::with('belogsToManyDealers')->get()->toArray();
        echo "<pre>";
        print_r($data);
        exit;
        return true;
    }
}
