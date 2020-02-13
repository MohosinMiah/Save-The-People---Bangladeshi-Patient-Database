<?php

namespace App\Http\Controllers;

use App\SuperUser;
use Illuminate\Http\Request;

class SuperUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');

    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Send OTP
     */
    public function send(Request $request)
    {

        $this->sendSms($request->phone);
        return redirect('/supperadmin/login');

    }

    public function sendSms($number){
  
        $code = str_random(5);

        // Twilio::message('8801816073636', $code);
        // to  8801857126452
        //  ar  8801767086814


        $url = "http://66.45.237.70/api.php";

        // $number="8801857126452";
        $text="Hello BD . Your Code ".$code;
        $data= array(
        'username'=>"01857126452",
        'password'=>"2RVXW48F",
        'number'=>"$number",
        'message'=>"$text"
        );
        
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
        $p = explode("|",$smsresult);
        $sendstatus = $p[0];
        return $sendstatus;

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function show(SuperUser $superUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperUser $superUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperUser $superUser)
    {
        //
    }


        /**
     * Show the form for login.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {

        return view('admin.login.loginSuperAdmin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperUser $superUser)
    {
        //
    }
}
