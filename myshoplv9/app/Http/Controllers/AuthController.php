<?php

namespace App\Http\Controllers;

use App\Models\Customer\Customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function sendVerificationCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/^09\d{9}$/',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Generate a random verification code (you might want to handle this differently)
        $verificationCode = mt_rand(1000, 9999);

        DB::table('phone_verifies')->insert([
            'phone' => $request->phone,
            'code' => $verificationCode,
            'created_at' => Carbon::now(),
        ]);

        // $message = "کد فعالسازی شما: $verificationCode";

        // // Set the url of the API endpoint
        // $url = "https://ippanel.com/services.jspd";

        // // Set the parameters for the POST request
        // $param = [
        //     'uname' => 'bnm7097',
        //     'pass' => '88432332iI',
        //     'from' => '+985000125475',
        //     'message' => $message,
        //     'to' => json_encode([$request->phone]),
        //     'op' => 'send'
        // ];

        // // Initialize a curl handle
        // $handler = curl_init($url);

        // // Set the options for the curl handle
        // curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST"); // use POST method
        // curl_setopt($handler, CURLOPT_POSTFIELDS, $param); // set the POST fields
        // curl_setopt($handler, CURLOPT_RETURNTRANSFER, true); // return the response as a string

        // // Execute the request and get the response
        // $response = curl_exec($handler);

        // // Close the curl handle
        // curl_close($handler);

        // // Decode the response as an array
        // $response = json_decode($response, true);

        // // Get the response code and data
        // $res_code = $response[0];
        // $res_data = $response[1];


        return response()->json([
            'message' => 'Verification code sent successfully',
            'success' => true,
            // 'res_code' => $res_code,
            // 'res_data' => $res_data,
        ], 200);
    }

    public function adminLoginForm()
    {
        return view('admin.panel.admin-login');
    }

    public function adminLogin(Request $request)
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

        // Authentication failed
        if (!$loginFlag) {
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }

        return redirect('/admin/dashboard');
    }

    public function adminRegisterForm()
    {
        return view('admin.panel.admin-register');
    }

    public function adminRegister(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $data['password'] = Hash::make($data['password']);
        $data['user_type'] = 'ADM';
        // dd($data);
        $user = User::create($data);

        // auth()->login($user);

        return redirect('/admin/dashboard');
    }

    public function adminLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function customerRegisterPage()
    {
        return view('customer.customer-register');
    }

    public function customerRegister(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'unique:customers,email'],
            'age' => ['nullable', 'string', 'max:3'],
            'gender' => ['nullable', 'string', 'max:10'],
            'phone_number' => ['nullable', 'string', 'max:15'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Validate phone and the received code from the user
        $verificationRecord = DB::table('phone_verifies')
            ->where('phone', $request->phone_number)
            ->where('code', $request->verify_code)
            ->orderBy('created_at', 'desc')
            ->first();

        // uncomment the following for activating the verification code check.
        if (!$verificationRecord || strtotime($verificationRecord->created_at) <= strtotime('-2 minutes')) {
            return response()->json([
                'message' => 'Code is invalid or expired',
            ], 403);
        }



        // Create the customer
        $customer = Customer::create($data);


        // Generate a random 8-character password
        $randomPassword = Str::random(8);

        // Hash the generated password
        $hashedPassword = Hash::make($randomPassword);


        $userData= [
            'name'=> $data['name'],
            'email'=> $data['email'],
            'phone'=> $data['phone_number'],
            'password'=> $hashedPassword,
            'user_type'=> 'CST',
        ];

        $user = User::create($userData);

        // Optionally log in the customer after registration
        // Auth::guard('customer')->login($customer);

        return redirect('/customer/dashboard');
    }

    public function customerLoginPage()
    {
        return view('customer.customer-login');
    }
}
