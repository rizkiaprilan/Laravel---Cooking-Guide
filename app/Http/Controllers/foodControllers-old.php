<?php

namespace App\Http\Controllers;

use App\food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class foodControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('foods')->get();
        //dd($data);cek isi data
        return view('food/indexFood',[
            "data"=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new food;  //nama modelnya
        $data->name = $request->name;
        $data->recipt = $request->recipt;

//        $image = $request->file('image');
//        $image_name = Uuid::uuid1().'.'.$image->getClientOriginalExtension();
//        $dest = storage_path('/app/public/images/');
//        $image->move($dest,$image_name);
//        $data->image = $image_name;

        $data->image = $request->image;

        $data->save();

        return redirect('/food/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
