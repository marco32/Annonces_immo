<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('/register/register');
    }

    /**
     * Add new register in Database.
     *
     * @return \Illuminate\Http\Response
     */
    public function NewRegister(Request $request)
    {
       
        $register= new Register;
        $register->name= $request->name;
        $register->email= $request->email;
        $register->photo= Null;
        $register->id_cms_privileges= 1;
        $register->password= bcrypt($request->password);
        $register->status= 'Active';
        $register->save();
        return redirect('/');
    }

}
