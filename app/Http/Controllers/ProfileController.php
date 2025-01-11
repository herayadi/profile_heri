<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        try {
            $dataProfile['name'] = 'Heri Rahmat Suryadi';
            $dataProfile['address'] = 'Jakarta Barat, DKI Jakarta';
            $dataProfile['age'] = '27';
            $dataProfile['email'] = 'herirahmatsuryadi@gmail.com';
            $dataProfile['phone'] = '+62-851-7997-9609';
            $dataProfile['city'] = 'Jakarta';
            $dataProfile['availability'] = 'Available';
            $dataProfile['about'] = 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.';

            $education['degree'] = 'Bachelor of Science';
            $education['university'] = 'University State of Makassar';
            $education['thesis'] = 'Pengaruh apa gitu ......';
            $education['yearFrom'] = '2015';
            $education['yearTo'] = '2020';
            $education['gpa'] = '3.52';

            $data = array_merge($dataProfile, $education);

            // return response()->json($dataProfile);
            return view('home.home', $data);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['code' => 500, 'title' => __('Fail'), 'message' => __('Something Went Wrong'), 'error_message' => $th->getMessage()], 200);
        }
    }
}
