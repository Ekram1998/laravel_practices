<?php

namespace App\Http\Controllers\Example;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function create()
    {
        return view('from');
    }

    //__using middleware controller__//
    public function country()
    {
        return view('country');
    }

    //__registration from submit__//
    public function studentstore(Request $request)
    {
        dd($request->all());
    }

    public function page()
    {
        return view('regForm');
    }

    //__password hash__//
    public function pass(Request $request)
    {
//        $password = $request->password;
//        echo $password;
        $password = Hash::make($request->password);
        echo $password;
    }

    //__form page value show__//
    public function show(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:15',
            'email'=>'required|email|max:80',
            'password'=>'required|min:8|max:14',
        ]);

        // Database Data insert
        // using query method then database data insert

        // store the recode on contact.log file
        \Log::channel('contactstore')->info('The contact form submited by : '.rand(1,20));
        return redirect()->back();

        //dd($request->all());
    }
}
