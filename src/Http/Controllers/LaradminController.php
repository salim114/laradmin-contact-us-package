<?php

namespace kossa\Laradmin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use kossa\Laradmin\Models\Laradmin;
use kossa\Laradmin\Mail\LaradminMailable;
use Illuminate\Support\Facades\Mail;

class LaradminController extends Controller
{

     public function index()
    {
        return view('laradmin::laradmin');
    }

     public function send(Request $request)
    {
        Mail::to(config('laradmin.send_email_to'))->send(new LaradminMailable($request->message,$request->name));
        Laradmin::create($request->all());
        return redirect(route('laradmin'));
    }
}
     
       
