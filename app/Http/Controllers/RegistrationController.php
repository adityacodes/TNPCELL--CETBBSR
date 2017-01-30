<?php

namespace App\Http\Controllers;

use Input, Validator, Redirect, Session;
use App\User;
use Hash, Mail, Rule;
use App\TNP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class RegistrationController extends Controller
{
    public function postRegister(Request $request)
    {

        $this->validate($request, array(
            'name' => 'bail|required|exists:t_n_p_s,regdno',
            'email' => 'bail|required|email|max:255|unique:users|exists:t_n_p_s,email,regdno,'.$request->name,
            'password' => 'required|confirmed|min:6',
            ), $messages = [
                'name.required' => 'The registration number field is required.',
                'password.required' => 'The password field is oviously required.',
                'exists' => 'We didnot see you in our records.',
                'email.exists' => 'You must use the same email address you used to register earlier.',
        ]);


        $confirmation_code = substr(md5(($request->name).'aditya') , 0, 10);
        // If user is present in our database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'confirmation_code' => $confirmation_code,
            'password' => bcrypt($request->password),
        ]);
        /* Send mail to the user */
        $regdno = $request->name;
        $name = $user->name;
        Mail::send('email.verify', [
            'confirmation_code' => $confirmation_code, 
            'regdno' => $regdno, 
            'name' => $name
        ], function($message) use ($request) {
            $message->from('admin@cetbtnp.com', 'CETB TNP');
            $message->to($request->email, $request->name)->subject('Verification Link');
        });
        Session::flash('success', 'A verification link has been sent to your email. Please verify to login.');
        
         
        return Redirect::to('login');   
    }

    public function confirm($confirmation_code)
    {
        if(!$confirmation_code)
        {
            return redirect()->route('user.dashboard');
        }

        $user = User::where('confirmation_code', $confirmation_code)->first();

        if (!$user)
        {
            Session::flash('warning', 'Confirmation token seems to be invalid. Please check the !');
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Session::flash('success', 'You have been successfully verified! Please login to continue');

        return Redirect::to('login');
    }

}
