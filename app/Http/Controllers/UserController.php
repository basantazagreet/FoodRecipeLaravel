<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    //

    function addUser(Request $req){
        $validateData = $req->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email',
            'username' => 'required|max:15',
            'password' => 'required|min:6|max:15',
            'retype' => 'required|same:password',
            'phone' => 'numeric|required'
            ]);

            $result = DB::table('users')
            ->where('username',$req->input('email'))
            ->get();
            
            $res = json_decode($result,true);
            print_r($res);
            
            if(sizeof($res)==0){
            $data = $req->input();

            $user = new User;
            $user->name = $data['name'];
            $user->address = $data['address'];
            $user->email = $data['email'];
            $user->username = $data['username'];
            $encrypted_password = crypt::encrypt($data['password']);
            $user->password = $encrypted_password;
            $user->phone = $data['phone'];
            $user->save();

            $req->session()->flash('register_status','User has been registered successfully');
            return redirect('/signupform');
            }
            else{
            $req->session()->flash('register_status','This username already exists.');
            return redirect('/signupform');
            }

    }

    function addUserInAPI(Request $req){



        $validateData = $req->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email',
            'username' => 'required|max:15',
            'password' => 'required|min:6|max:15',
            'retype' => 'required|same:password',
            'phone' => 'numeric|required'
            ]);

            $result = DB::table('users')
            ->where('username',$req->input('username'))
            ->get();
            
            $res = json_decode($result,true);
            print_r($res);
            
            if(sizeof($res)==0){
            $data = $req->input();

            $user = new User;
            $user->name = $data['name'];
            $user->address = $data['address'];
            $user->email = $data['email'];
            $user->username = $data['username'];
            $encrypted_password = crypt::encrypt($data['password']);
            $user->password = $encrypted_password;
            $user->phone = $data['phone'];
            $user->save();

            return response()->json([
                    'success' => '1',
                    'message' => 'Success!!'
                ]);
            }
            else{
            
                return response()->json([
                    'success' => '0',
                    'message' => 'Failed!'       
                ]);


            $result['success'] = '0';
             $result['message'] = "Failed";

            echo json_encode($result);

            }



    }





}
