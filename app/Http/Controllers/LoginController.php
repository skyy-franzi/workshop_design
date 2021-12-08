<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\LoginService;
use App\Service\MessageService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->has('submit')) {
            $login = new LoginService();
            $loginCheck = $login->login($request->input('username'), $request->input('password'));
            if ($loginCheck) {
                return redirect('/dashboard');
            }
        }

        return view('login');
    }

    public function signup(Request $request)
    {
        $message = new MessageService();

        $validLogin = true;
        if ($request->has('submit')) {
            //Password check in sign up form to check if passwords are similar
            if ($request->input('password') !== $request->input('newPassword')) {
                $validLogin = false;
                $message->add('Passwort ist nicht gleich!', 'warning');
            }

            $passwordLength = strlen($request->input('password'));
            if ($passwordLength < 4) {
                $validLogin = false;
                $message->add('Passwort ist zu kurz denn es hat nur ' . $passwordLength . ' Zeichen.', 'warning');
            }
            if ($validLogin) {
                $userExists = User::where('username', $request->input('username'))->first();
                if (!$userExists) {

                    $user = new User();
                    $user->username = $request->input('username');
                    $user->firstname = $request->input('firstname');
                    $user->lastname = $request->input('lastname');
                    $user->email = $request->input('email');
                    $user->password = md5($request->input('password'));
                    $user->save();

                    $message->add('User ist eingetragen!', 'success');
                } else {
                    $message->add('User ist schon vorhanden!', 'warning');
                    return redirect('/login');
                }
            }
        }

        return view('signup');
    }

    public function dashboard(Request $request)
    {
        $userSession = $request->session()->get('loginUser');
        $activeUser = User::find($userSession);
        $activeUsername = $activeUser->username;

        return view('dashboard', [
            'user' => $activeUsername,
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('loginUser');
        return redirect('/login');
    }

}

