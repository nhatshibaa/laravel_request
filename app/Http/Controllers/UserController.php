<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        return sprintf('Welcome to admin page %s, email:%s, password:%s', $name, $email, $password);
    }

    public function getUserDetail($id)
    {
        return 'Welcome back!' . $id;
    }

    public function register()
    {
        return view('user/register');
    }

    public function processRegister(Request $request)
    {
        $fullName = $request->get('fullname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $idCard = $request->get('id_card');
        return view('user.register-success')
            ->with('name', $fullName)
            ->with('email', $email)
            ->with('phone', $phone)
            ->with('address', $address)
            ->with('idCard', $idCard);
    }
}
