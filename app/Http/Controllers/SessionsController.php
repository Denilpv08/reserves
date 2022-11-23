<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    //Route the auth folder
    public function create() {
        
        return view('auth.login');
    }

    //validation if there are errors when logging in
    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

         } else {

            if(auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/');
            }
        }
    }
    //Log out
    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
