<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserAuthController extends Controller
{
    //
    public function viewLogin(){

        // if(Auth::user()){

        //     return redirect('dashboard');

        // }

        return view('login');
    }

    public function viewRegister(){
        return view('register');
    }

    public function viewDashboard(){
        return view('admin.dashboard');
    }


    public function userLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password'=>'required|min:8|max:150'
        ]);
        if(User::where('email',$request->email)->exists()){
           $user=User::where('email',$request->email)->first();
            if (Hash::check($request->password, $user->password)) {
                if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
                    return redirect('dashboard')->with('success','You have Successfully loggedin');
                }
            }else{

                   return redirect('login')->with('error','Sorry invalid password');
            }
        }else{
            return redirect()->back()->with('error','Sorry! this email is invalid');
        }
    }

    public function userRegister(Request $request){

        $request->validate([
            'full_name'     => 'required|max:20',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8|max:150|same:confirm_password',
            'confirm_password' => 'required|min:8|max:150'
        ]);
        $otp=rand(100000,999999);
        $token= Str::random(300);
        $user = new User();
        $user->name = $request->full_name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->role=1;
        $user->otp=$otp;
        $user->account_token =$token;
        $user->status = 0;
        $user->save();
        Session::put('token', $token);
        return redirect('otp-verify')->with(['otp'=>$otp]);
    }

    public function userVerifyOTP(Request $request){

        $request->validate([
            'otp'     => 'required|max:6|min:6'
        ]);
        $token=Session::get('token');
       if(User::where('account_token', $token)->where('otp', $request->otp)->exists()){
        $user=User::where('account_token', $token)->where('otp', $request->otp)->first();
        $user->otp=NULL;
        $user->account_token=NULL;
        $user->status=1;
        $user->save();
        return redirect('dashboard')->with('success','OTP verified successfull');

       }else{
        return redirect()->back()->with('error','Sorry OTP is not valid');
       }
       
       
    }

    public function userLogOut(){
        Auth::logout();
        return redirect('login')->with(['otp'=>'logged out successfully']);
    }

    public function otpVerify(Request $request){

        return view('admin.verify-otp');

    }

    // public function adminLogOut(){

    //     Session::flush();
    //     Auth::logout();
    //     return redirect('/login');
    // }
}
