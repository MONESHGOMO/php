<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class AppUserController extends Controller
{
    

    public function getAllUsers()
    {
        $usersData = User::all();
        return view('welcome')->with('usersData', $usersData);
    }
    

    public function showAddUserForm()
{
    return view('CreateUser');  // Your Blade form view filename: resources/views/addUser.blade.php
}

    public function addUser(Request  $addUserRequest){

        $addUsers = User::create([
            'name'     => $addUserRequest->name,
            'email'    => $addUserRequest->email,
            'password' => bcrypt($addUserRequest->password),
            'phone'    => $addUserRequest->phone,
            'address'  => $addUserRequest->address,
        ]);


        $ADMIN_KEY = "gomo";
        if(Str::contains($addUserRequest->name,$ADMIN_KEY)){
            $addUsers->role = "admin";
        }
        else{
            $addUsers->role = "user";

        }

        $addUsers->save();
        return redirect()->back()->with('success', 'User created successfully!');

    }

    public function editUserData($id) {
        $userData = User::find($id);
    
        if (!$userData) {
            return redirect()->back()->with('error', 'User not found!');
        }
    
        return view('edit', compact('userData'));
    }
    
    public function updateUserData(Request $request, $id) {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/');
    }
    

    public function deleteUserData($id) {
        $userDataForDelete = User::find($id);
    
        if (!$userDataForDelete) {
            return redirect()->back()->with('error', 'User not found!');
        }
    
        $userDataForDelete->delete();

        return redirect('/');
    }
    
    
}
