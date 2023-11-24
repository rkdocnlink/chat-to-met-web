<?php

namespace App\Http\Controllers\API\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use App\Http\Resources\GetUserListResource;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    //
    public function getUsersList(){
        if(User::where('status',1)->whereNotIn('id',[Auth::user()->id])->orderBy('id','DESC')->exists()){
            $list_contacts=User::where('status',1)->whereNotIn('id',[Auth::user()->id])->orderBy('id','DESC')->get();
            $file_url = URL::asset('uploads/user/profile_pic/');
            return response()->json(['status'=>true,'data'=> GetUserListResource::collection($list_contacts)],200);
        }else{
            return response()->json(['status'=>false,'message'=> 'No user found'],200);
        }
       
    }
}
