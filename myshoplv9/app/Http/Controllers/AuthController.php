<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function adminLoginForm() {
        return view('admin.panel.admin-login');
    }

    public function adminLogin(Request $request) {
        $loginFlag = false;
        //first find out the username type and then redirect to the data base.
        if (Auth::attempt([
            'phone' => $request->username,
            'password' => $request->password,
        ])) {
            $loginFlag = true;
        }

        if (!$loginFlag && Auth::attempt([
            'email' => $request->username,
            'password' => $request->password,
        ])) {
            $loginFlag = true;
        }

        // Authentication failed
        if (!$loginFlag) {
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }

        return redirect('/admin/dashboard');
    }

    public function adminRegisterForm() {
        return view('admin.panel.admin-register');
    }

    public function adminRegister(Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $data['password']= Hash::make($data['password']);
        $data['user_type'] = 'ADM';
        // dd($data);
        $user = User::create($data);

        // auth()->login($user);

        return redirect('/admin/dashboard');
    }

    public function adminLogout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function customerRegisterPage() {
        return view('customer.customer-register');
    }

    public function customerRegister(Request $request) {

    }

    public function customerLoginPage() {
        return view('customer.customer-login');
    }
}
