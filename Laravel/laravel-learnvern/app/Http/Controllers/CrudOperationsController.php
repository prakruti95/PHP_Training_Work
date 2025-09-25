<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CrudOperations;
use Illuminate\Http\Request;

class CrudOperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = CrudOperations::with('getCountry')->paginate('10');
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('registration', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->except(['_token', 'regist']);
        $imgName = 'lv_' . rand() . '.' . $request->profile->extension();
        $request->profile->move(public_path('profiles/'), $imgName);
        $requestData['profile'] = $imgName;
        $store = CrudOperations::create($requestData);
        return redirect()->route('crud.index')->with('success', 'User Inserted Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CrudOperations $crud
     * @return \Illuminate\Http\Response
     */
    public function show(CrudOperations $crud)
    {
        $countries = Country::all();
        return view('show', compact('countries', 'crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CrudOperations $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudOperations $crud)
    {
        $countries = Country::all();
        return view('edit', compact('countries', 'crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CrudOperations $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrudOperations $crud)
    {
        $crud->first_name = $request->first_name ?? $crud->first_name;
        $crud->last_name = $request->last_name ?? $crud->last_name;
        $crud->email = $request->email ?? $crud->email;
        $crud->contact = $request->contact ?? $crud->contact;
        $crud->gender = $request->gender ?? $crud->gender;
        $crud->hobbies = $request->hobbies ?? $crud->hobbies_arr;
        $crud->address = $request->address ?? $crud->address;
        $crud->country = $request->country ?? $crud->country;
        if(isset($request->profile)) {
            $imgName = 'lv_' . rand() . '.' . $request->profile->extension();
            $request->profile->move(public_path('profiles/'), $imgName);
            $crud->profile = $imgName;
        }
        $crud->save();
        return redirect()->route('crud.index')->with('success', 'User Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CrudOperations $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudOperations $crud)
    {
        $crud->delete();
        return redirect()->route('crud.index')->with('success', 'User Deleted Successfully.');
    }
}
