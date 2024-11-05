<?php

namespace App\Http\Controllers;

use App\Models\Courieragent;
use Illuminate\Http\Request;

class CourieragentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $courieragent = Courieragent::all();
        return view('admin.courieragentdetails',compact('courieragent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.courieragent');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if($image = $request->file('image')){
            $imgfdestination = 'images/';
            //$profileimg = $image->getClientOriginalExtension();
            $profileimg = date('YmdHis').".". $image->getClientOriginalExtension();
            $image->move($imgfdestination,$profileimg);
            $input['image']= "$profileimg";
        }
        Courieragent::create($input);
        return redirect()->route('courieragent.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courieragent  $courieragent
     * @return \Illuminate\Http\Response
     */
    public function show(Courieragent $courieragent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courieragent  $courieragent
     * @return \Illuminate\Http\Response
     */
    public function edit(Courieragent $courieragent)
    {
        //
        return view('admin.courieredit',compact('courieragent'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courieragent  $courieragent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courieragent $courieragent)
    {
        //
        
        $courieragent->update($request->all());
        return redirect()->route('courieragent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courieragent  $courieragent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courieragent $courieragent)
    {
        //
        $courieragent->delete();
        return redirect()->route('courieragent.index');
    }
}
