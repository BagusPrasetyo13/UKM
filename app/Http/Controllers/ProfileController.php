<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id', Auth::user()->id)->first();
        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'password' => 'max :50', 'confirmed',
        ]);
        $user = User::where('id', Auth::user()->id)->first();

        $user->nama = $request->nama;
        $user->email = $request->email;
        
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->update();
        return redirect('/dashboard/profile')->with('status', 'Data profil user berhasil diedit!');
    }
}
