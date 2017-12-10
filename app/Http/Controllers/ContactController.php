<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class ContactController extends Controller
{

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'min:2',
            'message' => 'min:1'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('kakosi69@gmail.com');
            $message->subject($data['subject']);
        });
        Session::flash('success', 'Your Email was Sent!');
        return redirect('/');
    }
}
