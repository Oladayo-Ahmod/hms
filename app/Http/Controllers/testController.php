<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class testController extends Controller
{
    //
    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password'=> 'required|min:5'
        ]);

        // check if validator fails
        if ($validator->fails()) {
            # code...
            // return response()->json(['error'=>$validator->errors()]);
        }
        // check for the credentials
        else{
            $user = User::where('email', '=', $request->email)->first();
            // return response()->json(['success'=>$user]);
            // return $user;
            if (Hash::check($request->password, $user['password'])) {
                
                return response()->json(['success'=>'done']);
            }
            else{
                return response()->json(['success'=>'notdone']);

            }
        }
    }
}
