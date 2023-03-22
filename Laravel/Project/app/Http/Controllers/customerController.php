<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\countrie;

use Hash;
use Alert;
use Session;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$data=countrie::all();
        return view('frontend.signup',['data'=>$data]);
    }
	
	public function profile()
    {
		$data=customer::where('id','=',session('user_id'))->first();
        return view('frontend.profile',['data'=>$data]);
    }
	
	
	
	public function alldata()
    {
	   $data=customer::all();  	
       return view('backend.manage_user',['data'=>$data]);
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
		$validated = $request->validate([
		'name' => 'required|alpha',
        'unm' => 'required|unique:customers|max:255',
        'pass' => 'required',
		'cid' => 'required',
		'file' => 'required|mimes:jpg,jpeg,png,gif'
		
		]);
        $data=new customer;
		$data->name=$request->name;
		$data->unm=$request->unm;
		$data->pass=$request->pass;
		$data->pass=Hash::make($request->pass);
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		
		//img upload
		$file=$request->file('file');		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);  // use move for move image in public/images

		$data->file=$filename; // name store in db
		
		$data->save();
		return redirect()->back();
		
    }
	
	public function login()
    {
        return view('frontend.login');
    }
	
	public function logincheck(Request $request)
    {
		$unm=$request->unm;
		$pass=$request->pass;
		
		$data=customer::where('unm','=',$unm)->first();
		if($data)
		{
			if(Hash::check($pass,$data->pass))
			{
				if($data->status=="Unblock")
				{
					//session create
					session()->put('unm',$data->unm);
					session()->put('name',$data->name);
					session()->put('user_id',$data->id);
					
					Alert::success('Congrats', 'You\'ve Successfully Logined');
					return redirect('/index');
				}
				else
				{
					Alert::error('Login Failed', 'Blocked Account');
					return redirect()->back();
				}
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
				Alert::error('Login Failed', 'Wrong Username');
				return redirect()->back();
		}
    }
	
	public function userlogout()
    {
		session()->pull('user_id');
		session()->pull('unm');
		session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
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
        $countrydata=countrie::all();
		$data=customer::where('id','=',$id)->first();
        return view('frontend.editprofile',['data'=>$data,'countrydata'=>$countrydata]);
    }

    /**
     * Update the specified resource in storage.
     */
	 
	 
    public function update(Request $request, string $id)
    {
        $data=customer::find($id);
		echo $data->file;
		exit();
		$data->name=$request->name;
		$data->unm=$request->unm;
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		
		//img upload
		
			
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			
			$file=$request->file('file');	
			$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
			$file->move('upload/customer/',$filename);  // use move for move image in public/images
			$data->file=$filename; // name store in db
			
			
			unlink('upload/customer/'.$old_img);
		}
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Update');
		return redirect('/profile');
		
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=customer::find($id); //
		$old_img=$data->file;
		if($old_img!="")
		{			
			unlink('upload/customer/'.$old_img);
		}
		$data->delete();
		return redirect('/manage_user');
    }
	
	
	public function status(Request $request, string $id)
    {
        $data=customer::find($id);
		$status=$data->status;
		if($status=="Unblock")
		{
			$data->status="Block";
			$data->save();
			Alert::success('Congrats', 'You\'ve Successfully Block');
			return redirect('/manage_user');
		}
		else
		{
			$data->status="Unblock";
			$data->save();
			Alert::success('Congrats', 'You\'ve Successfully Unblock');
			return redirect('/manage_user');
		}
		
    }
}
