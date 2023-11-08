<?php

namespace App\Http\Controllers\API\v2;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserloginAPIRequest;
use App\Http\Requests\UserRegisterAPIRequest;
use App\Http\Requests\UserVerifyOTPAPIRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Arr;
use Exception;
class AuthContoller extends Controller
{
    public function loginUser(UserloginAPIRequest $request){

      try{

        if(User::where('email',$request->email)->exists()){

          $user=User::where('email',$request->email)->first();
 
           if (Hash::check($request->password, $user->password)) {
            
              $userToken= $user->createToken(env('API_ACCESS_TOKEN'))->accessToken;
                $user->access_token = $userToken;
                  return response()->json(['status'=>true,
                                        'messaage'=>'Login Successfull',
                                        'auth_token'=>$userToken,
                                        'data'=>new UserResource($user)], 200);
               
           }else{
 
               return response()->json(['status'=>false,'messaage'=>'Sorry invalid password'], 200);
           }
       }else{
           return response()->json(['status'=>false,'error'=>'Sorry this email does not exists'], 200);
       }

      }catch(Exception $e){ 

        return response()->json(['status'=>false,'error'=>$e->getMessage()],500);
      }
       
    }
    public function registerUser(UserRegisterAPIRequest $request){
      try{

        $otp=rand(100000,999999);
        $createUser=new User();
        $createUser->name=$request->name;
        $createUser->email=$request->email;
        $createUser->password=$request->password;
        $createUser->role=1;
        $createUser->otp=$otp;
        $createUser->save();
        return response()->json(['status'=>false,'error'=>'An OTP sent to your mail ID '. $otp],200);

      }catch(Exception $e){ 

        return response()->json(['status'=>false,'error'=>$e->getMessage()],500);
      }
       
  }

  public function verifyOTP(UserVerifyOTPAPIRequest $request){
    try{

      $otp=rand(100000,999999);
      $createUser=new User();
      $createUser->name=$request->name;
      $createUser->email=$request->email;
      $createUser->password=$request->password;
      $createUser->role=1;
      $createUser->otp=$otp;
      $createUser->save();
      return response()->json(['status'=>false,'error'=>'An OTP sent to your mail ID '. $otp],200);

    }catch(Exception $e){ 

      return response()->json(['status'=>false,'error'=>$e->getMessage()],500);
    }
     
}

      public function userInfo(){

        $user=User::where('id',Auth::user()->id)->first();
        return response()->json(['status'=>true,'message'=> $user],200);

      }
}
