<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\MessageService;
use Illuminate\Http\Request;

class ProfileController
{
    public function editProfile(Request $request)
    {
        $message = new MessageService();

        $id = session('loginUser');

        $user = User::find($id);

        if ($request->has('submit')) {
            $user->username = $request->input('username');
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->save();

            $message->add( 'Änderung erfolgreich!', 'success');
        }

        return view('profile/edit', [
            'user' => $user,
            'message' => $message,
        ]);
    }

    public function showProfile(){

        return view('profile/show');

    }

}
