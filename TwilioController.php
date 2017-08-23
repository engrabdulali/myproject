<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwilioController extends Controller
{
    	public function test(){
		//Twilio::message($user->phone, $message);
		$link = mysqli_connect("localhost", "root", "", "inituitjobs-sms");
		$sql = "SELECT * FROM users WHERE name='Admin'";
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				$phone = $row['phone'];
			}
		//return DB::table('users')->where('user', $username)->value('Admin');
		//echo $username;
		
		}
		$twilio->message($phone, 'Pink Elephants and Happy Rainbows');
		}
		}
}
