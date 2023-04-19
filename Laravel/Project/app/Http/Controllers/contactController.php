<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
    }
	
	
	public function alldata()
    {
	   $data=contact::all();
       return view('backend.manage_contact',['data'=>$data]);
    }
	
	public function getdata(Request $request)
    {
		$name=$request->name;
		$data['name']=contact::where('name','LIKE',$name.'%')->get();
        return response()->json($data);	
    }
	
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact=new contact;
		$contact->name=$request->name;
		$contact->email=$request->email;
		$contact->sub=$request->sub;
		$contact->msg=$request->msg;
		$contact->save();
		return redirect('/contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=contact::find($id);
		$data->delete();
		return redirect('/manage_contact');
    }
}
