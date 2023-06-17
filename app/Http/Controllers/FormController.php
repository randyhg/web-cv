<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    public function insert(Request $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->subject = $request->input('subject');
        $user->message = $request->input('message');
        $user->save();
        Alert::success('Sent Successfully', 'Thanks for your Feedback!');
        return redirect('/');
    }
}
