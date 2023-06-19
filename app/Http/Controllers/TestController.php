<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function Landing()
    {
        $users = TestModel::paginate(50);
        return view('welcome', ['students' => $users]);
    }

    function CreateUser()
    {
        return view('create-user');
    }

    function StoreUser(Request $request)
    {
        $student = [
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ];

        $usedddd = TestModel::create($student);

        return $usedddd;
    }

    function UpdateUser($user_id)
    {
        $userInfo = TestModel::where(['id' => $user_id])->first();
        return view('update', ['user' => $userInfo]);
    }

    function PutUserDetails(Request $request, $user_id)
    {
        $data = [
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ];
        TestModel::where(['id' => $user_id])->update($data);
        return redirect()->route('user.view', ['user_id' => $user_id]);
    }

    function DeleteUserDetails($user_id)
    {
        TestModel::where(['id' => $user_id])->delete();
        return redirect()->to('/');
    }
}
