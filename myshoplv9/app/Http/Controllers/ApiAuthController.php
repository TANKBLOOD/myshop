<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer\Profile;
use App\Models\Shopping\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    //
    public function registerAdmin(Request $request)
    {
        $newUser= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'user_type' => 'ADM',
        ]);

        $newProfile= Profile::create([
            'user_id'=> $newUser->id,
            'name'=> $request->name,
            'last_name'=> $request->lastName,
            'age'=> $request->age,
            'gender'=> $request->gender,
            'phone_number'=> $request->phoneNumber,
        ]);

        return $newUser;
    }

    public function loginAdmin(Request $request)
    {
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

        if (!$loginFlag) {
            return response([
                'message' => 'Invalide credential!'
            ]);
        }

        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 12)->withSecure(true)->withHttpOnly(true)->withSameSite("none"); //0.5 day
        // $name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = false

        return response([
            'message' => 'Success',
            'token'=> $token,
        ])->withCookie($cookie);
    }

    public function adminUser()
    {
        return Auth::user();
    }

    public function adminLogout()
    {
        $cookie = Cookie::forget('jwt')->withSecure(true)->withHttpOnly(true)->withSameSite("none");

        return response([
            'message' => 'Success',
        ])->withCookie($cookie);
    }

    public function registerCustomer(Request $request) {
        $newUser= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'user_type' => 'CST',
        ]);

        $newProfile= Profile::create([
            'user_id'=> $newUser->id,
            'name'=> $request->name,
            'last_name'=> $request->lastName,
            'age'=> $request->age,
            'gender'=> $request->gender,
            'phone_number'=> $request->phoneNumber,
        ]);

        $newCart= new Cart();
        $newCart->user_id= $newUser->id;
        $newCart->save();

        return $newUser;
    }

    public function loginCustomer(Request $request)
    {
        $loginFlag = false;
        //first find out the username type and then redirect to the data base.
        if (Auth::attempt([
            'phone' => $request->username,
            'password' => $request->password,
            'user_type'=> 'CST',
        ])) {
            $loginFlag = true;
        }

        if (!$loginFlag && Auth::attempt([
            'email' => $request->username,
            'password' => $request->password,
            'user_type'=> 'CST',
        ])) {
            $loginFlag = true;
        }

        if (!$loginFlag) {
            return response([
                'message' => 'Invalide credential!'
            ]);
        }

        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 12)->withSecure(true)->withHttpOnly(true)->withSameSite("none"); //0.5 day
        // $name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = false

        return response([
            'message' => 'Success',
        ])->withCookie($cookie);
    }
}
