<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Exception;

class userController extends Controller
{
    public function saveUser(Request $request)
    {
        try{
            if(isset($request['name'], $request['message'] , $request['phone'] , $request['email']))
            {
                User::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'phone' => $request['phone'],
                    'message' => $request['message']
                ]);

                $details = [
                    'title' => 'Post title: ' . $request['name'],
                    'body' => $request['message']
                ];
                
                Mail::to($request['email'])->send(new \App\Mail\Email($details));
                return["status"=>200];
            }else{
                return("Error objeto vacio");
            }
        }
        catch (Exception $e) {
            return($e);
        }
        
    }

    public function test(Request $request)
    {
        return('21');
    }
}
