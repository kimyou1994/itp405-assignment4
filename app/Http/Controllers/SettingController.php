<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    public function index() {
    	$query = DB::table('configurations')
    		->where('name', '=', 'maintenance')
    		->first();

    	return view('setting', [
    		'maintenance' => $query->value
    	]);
    }

    public function change(Request $request) {
    	if ($request->has('maint')) {
	    	$query = DB::table('configurations')
	    		->where('name', '=', 'maintenance')
	    		->update(['value' => 'on']);
    	}
	    else{
	    	$query = DB::table('configurations')
	    		->where('name', '=', 'maintenance')
	    		->update(['value' => 'off']);
	    }
		return redirect('/profile');
    }
}
