<?php
namespace App\Repositories;
use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface{
    
    // get all users
    public function getAllUsers()
    {
        $users = User::all();
        return response()->json(['allUsers'=>$users]);
    }

    // get user by Id
    public function getUserById($userId)
    {
        $user = User::findOrFail($userId);
    } 
}