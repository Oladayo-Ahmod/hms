<?php

namespace App\Interfaces;

interface UserInterface {
    function getAllUsers();
    function getUserById();
    function createUser();
    function updateUser($id, array $userDetails);
    function deleteUser($id);
}