<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomAuthController extends Controller {

    public function index() {

        return view('signinx');
    }

    public function login(Request $request) {
        return $request;
    }

    public function signinProcess(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed

            $user = Auth::user();
            $request->session()->regenerate();
            $request->session()->put('user', $user);

            return response()->json(['url' => url('home')]);
        }

        return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function registration() {
        return view('signup');
    }

    public function customSignup(Request $request) {

        if ($request->password == $request->rePassword) {
            try {


                $validator = Validator::make($request->all(), [
                            'fullName' => 'required|min:5',
                            'email' => 'required|email|unique:users',
                            'password' => 'required|min:6',
                                ],
                                [
                                    'fullName.required' => 'Userame is required',
                                    'email.required' => 'Email is required',
                                    'password.required' => 'Password is required',
                                ]
                );
                if ($validator->fails()) {
                    return response()->json(['message' => 'Something went wrong', 'type' => 0]);
                }

                // Create a new user
                $user = new User();
                $user->email = $request->email;
                $user->name = $request->fullName;
                $user->password = bcrypt($request->password);
                $user->save();

                // Return a success response
                return response()->json(['message' => 'User created successfully', 'type' => 1]);
            } catch (Exception $e) {
                // Exception handling code
                // Print the error message
                $errorMessage = $e->getMessage();

                return response()->json(['message' => $errorMessage, 'type' => 0]);
            }
        } else {
            return response()->json(['message' => 'Password mismatch', 'type' => 0]);
        }
    }

    public function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard() {
        if (Auth::check()) {
            return view('index');
        }

        return redirect("signin")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect(url('/'));
    }

}
