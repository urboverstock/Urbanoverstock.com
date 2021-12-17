<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Validator;

class NewsletterController extends Controller
{
    public function sendNewsLetter(Request $request)
    {
		$userEmail = $request->email;
		
		if($request->isMethod('post')){
			$postData = $request->all();
			$validator = Validator::make($postData, [
                'email' => 'required|email'
			]);
			
			if ($validator->fails()) {
			   return redirect()->back()->with('error', 'Enter valid email address');   
            }
		}

        $checkEmail = Newsletter::where('email', $userEmail)->first();

        if(!empty($checkEmail))
        {
            return redirect()->back()->with('success', 'Already subscribed');   
        }


    	$strFromEmail = config('mail.from.address');
    	$strFromName = config('mail.from.name');
    	$viewContent = view('email_templates.newsletter', ['userEmail' => $userEmail]);
    	$subject = 'Success';

    	sendEmailNotification($userEmail, $strFromEmail, $strFromName, $viewContent, $subject);

    	$newsletter = new Newsletter;
    	$newsletter->email = $userEmail;
    	$newsletter->status = SUBSCRIBED;

    	if($newsletter->save())
    	{
    		return redirect()->back()->with('success', 'Successfully subscribed');
    	}

    	
    }
}
