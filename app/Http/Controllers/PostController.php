<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;
use App\Mail\Design;
use App\Mail\ContactForm;
class PostController extends Controller
{
    public function customDesign(Request $request)
    {
        // dd($request->all());
            $validator = Validator::make($request->all(), [
                'fullName' => 'required',
                'email' => 'required|email',
                'rugSize' => 'required',
                'phone' => 'required',
                'otherDetails' => 'required',
                'upload' => 'required|max:5000|mimes:jpeg,jpg'
            ]);
            
            if ($validator->passes()) {
                $user_info = $this->ipLocation($request->ip());
                $data = array(
                    'fullName' => $request->fullName,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'otherDetails' => $request->otherDetails,
                    'user_info' => $user_info,
                    'upload' => $request->upload
                );  
                Mail::send(new Design($data));
                return response()->json(['success'=>'Mail sent sucessfully.']);
            }
            return response()->json(['error'=>$validator->errors()->all()]);            
    }

    public function contact(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $user_info = $this->ipLocation($request->ip());
        $data = array(
            'fullName' => $request->fullName,
            'email' => $request->email,
            'subject' => $request->subject,
            'messageDetail' => $request->message
        );  
        Mail::send(new ContactForm($data));
        return redirect()->back();
    }

    public function ipLocation($ip)
    {
        $IPdata = file_get_contents("http://api.ipstack.com/{$ip}?access_key=4d40e0df91dca7d3707921b34b44e7d5");
        $IPdata = json_decode($IPdata);
        $user_info = "IP: {$IPdata->ip} <br> [ Country: <b>{$IPdata->country_name}</b> | City: {$IPdata->city} ]";
        return $user_info;
    }
}
