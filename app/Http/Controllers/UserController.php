<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /** 
     * Log in with a mail and password
     * 
     * @return \Illuminate\Http\Response 
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['mail' => $request['mail'], 'password' => $request['password']])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /** 
     * Register a new user
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'mail' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'gender' => '',
            'ed_program_id' => '',
            'class_id' => '',
            'role_id' => ''
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $validatedData = $validator->validated();

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;

        $success['user'] = $user;
        $success['token'] = $accessToken;
        return response()->json(['success' => $success], 200);
    }

    /** 
     * Returns the details of a user
     * 
     * @return \Illuminate\Http\Response 
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], 200);
    }
}
