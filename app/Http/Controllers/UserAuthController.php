<?php

namespace App\Http\Controllers;

use App\Models\ContactList;
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
        return view('login');
    }

    public function viewRegister(){
        return view('register');
    }

    public function viewDashboard(){
        // return ContactList::where('user_id_2',Auth::user()->id)->where('status',0)->get() ;
        $list_contacts=User::where('status',1)->whereNotIn('id',[Auth::user()->id])->orderBy('id','DESC')->get();
        $list_my_contacts=ContactList::where('user_id_1',Auth::user()->id)->where('status',1)->get();
        return view('dashboard',compact('list_contacts','list_my_contacts'));
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
        return redirect('login')->with('success','OTP verified successfull');

       }else{
        return redirect()->back()->with('error','Sorry OTP is not valid');
       }
       
       
    }

    public function userLogOut(){
        Session::flush();
        Auth::logout();
        return redirect('login')->with(['otp'=>'Logged out successfully']);
    }

    public function otpVerify(Request $request){
        return view('verify-otp');
    }
    public function userProfile(){
        return view('profile-update'); 
    }

    public function userProfileUpdate(Request $request){

       $user=User::where('id', Auth::user()->id)->first();
       $user->name=$request->full_name;
       $user->mobile=$request->mobile_number;
       $user->location=$request->location;
       $user->bio=$request->bio;
       if($request->hasFile('profile_pic')){
        $user->profile_pic = $this->addImage($request->profile_pic,'uploads/user/profile_pic');
        }
       $user->facebook=$request->facebook;
       $user->twitter=$request->twitter;
       $user->instagram=$request->instagram;
       $user->linkedin=$request->linkedin;
       $user->save();
       return redirect()->back()->with('success','Profile updated successfully...');
    }


    public function addImage($requestName,$path){
        $imageName = time().'.'.$requestName->extension();  
        $requestName->move(public_path($path), $imageName);
        return $imageName;
       }
   
}
