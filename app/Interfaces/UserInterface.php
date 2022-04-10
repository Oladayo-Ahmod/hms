<?php

namespace App\Interfaces;

interface UserInterface {
    function getAllUsers();
    function getUserById();
    function createUser(array $userDetails);
    function updateUser($id, array $newUserDetails);
    function deleteUser($id);
}