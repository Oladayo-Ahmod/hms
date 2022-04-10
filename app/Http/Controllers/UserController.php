<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json('hello world');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // registation functionality

        // validate the request
        $validator = Validator::make($request->all(),[
            'first_name'=> 'required|string',
            'last_name'=> 'required|string',
            'email'=> 'email|required|unique:users',
            'password'=> 'required|min:6'
        ]);
        
        // check for error message
        if ($validator->fails()) {
            # code...
            return response()->json(['error'=>$validator->errors()]);
        }
        else{
            // store the user
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json(['success'=>'Signed up successfully']);
        }
        
     

    }

     /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password'=> 'required|min:6'
        ]);

        // check if validator fails
        if ($validator->fails()) {
            # code...
            return response()->json(['error'=>$validator->errors()]);
        }
        // check for the credentials
        else{
            $user = User::where('email', '=', $request->email)->first();
            if (Hash::check($request->password, $user['password'])) {
                
                return response()->json(['success'=>'loggedin','firstName'=>$user->first_name]);
            }
            else{
                return response()->json(['error'=>'incorrect email or password']);

            }
        }
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
