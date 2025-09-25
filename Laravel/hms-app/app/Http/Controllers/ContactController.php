<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactModel;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hms.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validations rules by validator
        $request->validate([
            "name"=>"required | max:255",
            "email"=>"required | email",
            "phone"=>"required | min:10 | max:10",
            "subject"=>"required",
            "message"=>"required"
        ]);   
        //create a $data to stored values
        $data=array(
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "subject"=>$request->subject,
            "message"=>$request->message
        );
        // create a ORM(object relational mapping model) elequent query builder for insert data
        ContactModel::create($data);
        return redirect('/contact-us')->with('success','Thanks for contact with us Our admin will contact with you Soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    //create a ORM query builder to show all data of contacts us in admin panel   
    $data=ContactModel::all();
    return view('hms.admin.managecontacts',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
