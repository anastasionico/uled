<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;
use App\Http\Controllers\Mail;

class SharesController extends Controller
{
	public function store (Request $request) 
	{
		$validatedData = $request->validate([
	        'name' => 'required|min:2|max:255',
	        'friend' => 'required|min:2|max:255',
	        'email' => 'required|min:2|max:255|unique:shares',
	    ]);

		Share::create([
            'name' => request('name'),
            'friend' => request('friend'),
            'email' => request('email'),
            
        ]);

		
		$request->session()->flash('alert-success', 'Information stored');

        return redirect('send-mail/' . request('email'));
	}
}

