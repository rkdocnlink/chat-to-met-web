<?php

namespace App\Http\Controllers\API\v2;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserloginAPIRequest;
use App\Http\Requests\UserRegisterAPIRequest;
use App\Http\Requests\UserVerifyOTPAPIRequest;
use App\Http\Resources\UserInfoResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Str;
use Exception;
class AuthContoller extends Controller
{
    public function loginUser(UserloginAPIRequest $request){

      try{
        if(User::where('email',$request->email)->exists()){
          $user=User::where('email',$request->email)->first();
           if (Hash::check($request->password, $user->password)) {
             if(User::where('email',$request->email)->where('status',1)->exists()){
              $credentials = request(['email', 'password']);
              Auth::attempt($credentials);
              $userToken= $user->createToken(env('API_ACCESS_TOKEN'))->accessToken;
                $user->access_token = $userToken;
                  return response()->json(['status'=>true,
                                        'message'=>'Login Successfull',
                                        'auth_token'=>$userToken,
                                        'data'=>new UserResource($user)], 200);
                  }elseif(User::where('email',$request->email)->where('status',0)->exists()){
                    return response()->json(['status'=>false,'message'=>['error'=>['Sorry account is not verified']]], 200);
                }
           }else{
               return response()->json(['status'=>false,'message'=>['error'=>['Sorry invalid password']]], 200);
           }
       }else{
           return response()->json(['status'=>false,'message'=>['error'=>['Sorry this email does not exist']]], 200);
       }

      }catch(Exception $e){ 
        return response()->json(['status'=>false,'message'=>['error'=>[$e->getMessage()]]],500);
      }
       
    }
    public function registerUser(UserRegisterAPIRequest $request){

      try{

        if(!User::where('email',$request->email)->exists()){
            $otp=rand(100000,999999);
            $accountToken = Str::random(300);
            $createUser=new User();
            $createUser->name=$request->name;
            $createUser->email=$request->email;
            $createUser->password=Hash::make($request->password);
            $createUser->role=1;
            $createUser->otp=$otp;
            $createUser->account_token=$accountToken;
            $createUser->save();
            return response()->json(['status'=>true,'message'=>'An OTP sent to your mail ID '. $otp,'temp_access_token'=>$accountToken],200);

        }
        else if(User::where('email',$request->email)->where('status',0)->exists()){
            $otp=rand(100000,999999);
            $accountToken = Str::random(300);
            $createUser=User::where('email',$request->email)->where('status',0)->first();
            $createUser->name=$request->name;
            $createUser->email=$request->email;
            $createUser->password=Hash::make($request->password);
            $createUser->role=1;
            $createUser->otp=$otp;
            $createUser->account_token=$accountToken;
            $createUser->save();
            return response()->json(['status'=>true,'message'=>'An OTP sent to your mail ID '. $otp,'temp_access_token'=>$accountToken],200);

        }else{
          return response()->json(['status'=>false,'message'=>['error'=>[ 'Sorry this email is already exists']]]);
        }  
      }catch(Exception $e){ 
        return response()->json(['status'=>false,'message'=>['error'=>[ $e->getMessage()]]],500);
      }
       
  }

  public function verifyOTP(UserVerifyOTPAPIRequest $request){

    try{

      if(User::where('account_token',$request->temp_access_token)->exists()){
        if(User::where('otp',$request->otp)->exists()){
             $user=User::where('account_token',$request->temp_access_token)->first();
             $user->account_token=NULL;
             $user->otp=NULL;
             $user->status=1;
             $user->save();
              return response()->json(['status'=>true,'message'=>'OTP verified successfully. Please login to continue'],200);
        }else{
          return response()->json(['status'=>false,'message'=>['error'=>['Sorry otp is invalid']]],200);
        }
      }else{
        return response()->json(['status'=>false,'message'=>['error'=>['Sorry temporary account token is invalid']]],200);
      }
     
    }catch(Exception $e){ 
      return response()->json(['status'=>false,'message'=>['error'=>[ $e->getMessage()]]],500);
    }

}

      public function userInfo(){
        $user=User::where('id',Auth::user()->id)->first();
        return response()->json(['status'=>true,'data'=> new UserInfoResource($user)],200);

      }
}
