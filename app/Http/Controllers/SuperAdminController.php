<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

    class SuperAdminController extends Controller
{
    

    public function show()
    {
        return view('super-admin.admincreation');
    }

    public function createAdmin(Request $request)

    {
        
        // Validation for user creation of Super Admin
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'string|email|unique:users',
                'role' => ['required','integer'],
                'password' => 'required',

            ]
        );

        dd($validated);
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'password' => $validated['name'],
        ]);

        return view('home');
    }

    public function superadminHome()
    {
        return view('home', ["msg" => "I am a super admin role"]);
    }


    public function showDashboard() 
    {

        return view('admin.admindashboard');
    }
}
