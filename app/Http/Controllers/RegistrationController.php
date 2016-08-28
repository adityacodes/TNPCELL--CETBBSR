<?php

namespace App\Http\Controllers;

use Input, Validator, Redirect, Session;
use App\User;
use Hash, Mail;
use App\TNP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class RegistrationController extends Controller
{
    public function postRegister(Request $request)
    {
            
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ));

        

        $user = TNP::where('regdno', '=' ,$request->name)->first();
        
        if(!$user)    
        {
            Session::flash('warning', 'Sorry !! We didnot see your name in our records');    
         }
         else
         {
            if($user->email == $request->email)
            {
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
    
                  Mail::send('email.verify', ['confirmation_code' => $confirmation_code, 'regdno' => $regdno, 'name' => $name], function($message) use ($request) {
                        $message->from('admin@cetbtnp.com', 'CETB TNP');
                        $message->to($request->email, $request->name)->subject('Verification Link');
                    }); 
                
    
                // Set flash message for the user to check email
                  Session::flash('success', 'A verification link has been sent to your email. Please verify to login.');
            }
            else{
                Session::flash('warning', 'Please register with the email address in the college register. If you think that you are seeing this message by mistake. Please contact admin.');
            }
         }
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
