<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer\Profile;

class ProfileController extends Controller
{
    public function userProfileInfo(Request $request, $userId) {
        $profile= Profile::where('user_id', $userId)->first();

        return $profile;
    }

    public function update(Request $request) {
        $userImage= '';
        $updated= Profile::where('user_id', $request->userId)->update([
            'name'=> $request->name,
            'last_name'=> $request->lastName,
            'age'=> $request->age,
            'gender'=> $request->gender,
            'phone_number'=> $request->phoneNumber,
            'image'=> $userImage,
        ]);

        return $updated;
    }

    public function show() {
        return view('customer.customer-profile');
    }
}
