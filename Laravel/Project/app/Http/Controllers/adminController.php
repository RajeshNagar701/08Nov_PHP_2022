<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Alert;	
use Session;

class adminController extends Controller
{
    public function admin()
    {
        return view('backend.index');
    }
	
	public function logincheck(Request $request)
    {
		$anm=$request->anm;
		$apass=$request->apass;
		
		$data=admin::where('anm','=',$anm)->first();
		if($data)
		{
			if(Hash::check($apass,$data->apass))
			{
				session()->put('anm',$data->anm);
				session()->put('admin_id',$data->id);
				
				Alert::success('Congrats', 'You\'ve Successfully Logined');
				return redirect('/dashboard');
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
	
	public function adminlogout()
    {
		session()->pull('anm');
		session()->pull('admin_id');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/admin');
	}
}
