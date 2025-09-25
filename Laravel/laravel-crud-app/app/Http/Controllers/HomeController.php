<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.content');
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

    public function product()
    {
        return view('crud.addproducts');
    } 
    public function store(Request $request)
    {
        // create a validations for stored data
        $validated = $request->validate([
            'photo' => 'required|max:255',
            'name' => 'required|max:255',
            'weight' => 'required',
            'price' =>'required',
            "qty"=>"required",
            "descriptions"=>"required"

        ]);

        // upload products photo
        $photo=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'),$photo);

        $data=array(
            "photo"=>$photo,
            "name"=>$request->name,
            "weight"=>$request->weight,
            "price"=>$request->price,
            "qty"=>$request->qty, 
            "descriptions"=>$request->descriptions
        ); 
        // elquent query builder ORM model
        HomeModel::create($data);
        return redirect('/')->with('success','Your products Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //create an ORM query builder 
        $data=HomeModel::all();
        return view('crud.content',["data"=>$data]);
    }

    public function read($id)
    {
        //create an ORM query builder for read a single data 
        $data=HomeModel::where('id',$id)->first();
        // dd($data);
        return view('crud.read',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //create an ORM query builder for edit a single data 
         $editdata=HomeModel::where('id',$id)->first();
         // dd($data);
         return view('crud.edit-data',["editdata"=>$editdata]);
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
        //create an ORM query builder for update a single data 
        $editdata=array(
            "name"=>$request->name,
            "weight"=>$request->weight,
            "price"=>$request->price
        ); 
        HomeModel::where('id',$id)->update($editdata);
        // dd($data);
        return redirect('/')->with('updsuccess','Your products updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //create an ORM query builder for delete a products 
          HomeModel::where('id',$id)->delete();
          // dd($data);
          return redirect('/')->with('delsuccess','Your products deleted successfully');
    }
}
