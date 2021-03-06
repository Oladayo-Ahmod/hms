<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Session::has('user')) {
            return Session::get('user');
            # code...
        }
        $data = $this->userRepository->getAllUsers();
        return response()->json($data);
    }

    // check if user is authenticated
    public function authenticated(){
     $user = auth()->user();
     if ($user) {
         # code...
        return response()->json($user,200);

     }
     else{
        return response()->json('unauthenticated',401);

     }
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
           $user = $this->userRepository->CreateUser($request->all());
               # code...
            if ($user) {
                # code...
            return response()->json(['success'=>'Signed up successfully','token'=>$user->createToken('token')->plainTextToken]);

            }
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
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                # code...
                return response()->json(['error'=>'credentials not found']);

            }
            return response()->json(['success'=> 'success', 'token'=> auth()->user()->createToken('tokens')->plainTextToken]);

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
