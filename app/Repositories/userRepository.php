<?php
namespace App\Repositories;
use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface{
    
    // get all users
    public function getAllUsers()
    {
        $users = User::all();
        return $users;
    }

    // get user by Id
    public function getUserById($userId)
    {
        $user = User::findOrFail($userId);
        return $user;
    }

    // create new user 
    public function createUser(array $userDetails)
    {
        $user = User::create($userDetails);
        return $user;
    }

    // update user
    public function updateUser($id, array $newUserDetails)
    {
        $user = User::findOrFail($id);
        $user->update($newUserDetails);
    }

    // delete user
    public function deleteUser($id)
    {
        User::destroy($id);
    }
}