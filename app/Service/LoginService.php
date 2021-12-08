<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginService
{
    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function login(string $username, string $password)
    {
        $message = new MessageService();
        $isValid = true;

        if (empty($username)) {
            $message->add('Username ist leer du Opfer', 'warning');
            $isValid = false;
        }

        $user = User::where('username', $username)->first();
        if (!$user) {
            $message->add('User ist nicht vorhanden!', 'warning');
            $isValid = false;
        }

        if ($isValid) {
            $passwordReal = $user->password;
            $passwordCheck = md5($password);
            if ($passwordReal === $passwordCheck) {
                Session::put('loginUser', $user->id);
                return $user;
            } else {
                $message->add('Passwort ist falsch!', 'warning');
                return false;
            }
        }

        return false;
    }
}
