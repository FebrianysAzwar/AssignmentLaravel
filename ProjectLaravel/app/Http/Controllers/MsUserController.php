<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Myuser;
use App\User;

class MsUserController extends Controller
{
    public function Tampil(){
        $myusers = Myuser::all();
        return view('users.index', ['myusers' => $myusers]);
    }

    public function Simpan(Request $request){

        $myusers = new Myuser(); //membuat object dari model Myuser.php
        
        $myusers->firstname=$request->firstname;
        $myusers->lastname=$request->lastname;
        $myusers->email=$request->email;
        $myusers->telpnumber=$request->telpnumber;
        $myusers->message=$request->message;
            
        $myusers->save(); //simpan ke database    

        return redirect()->Route('show');
    }

    
    public function Delete($id){
        // Myuser::where('id', $id)->delete();

        // return Redirect::route('Show');
        $myusers=Myuser::find($id);

        $myusers->delete($myusers->id);
      
        return redirect()->Route('show'); 
      
    }

}
