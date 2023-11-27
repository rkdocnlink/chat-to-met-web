<?php

namespace App\Http\Controllers\API\v2;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactList;
use Illuminate\Support\Facades\URL;
use App\Http\Resources\GetUserListResource;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function getUsersList(Request $request){
         $this->debuggers($request->header());
        if(User::where('status',1)->whereNotIn('id',[Auth::user()->id])->orderBy('id','DESC')->exists()){
            $list_contacts=User::where('status',1)->whereNotIn('id',[Auth::user()->id])->orderBy('id','DESC')->get();
            $file_url = URL::asset('uploads/user/profile_pic/');
            return response()->json(['status'=>true,'data'=> GetUserListResource::collection($list_contacts)],200);
        }else{
            return response()->json(['status'=>false,'message'=> 'No user found'],200);
        }
    }

    public function sendContactRequest(Request $request){
        
        if(!ContactList::where("user_id_1", Auth::user()->id)->where('user_id_2',$request->friendID)->exists()){
            $addFriend=new ContactList();
            $addFriend->user_id_1=Auth::user()->id;
            $addFriend->user_id_2=$request->friendID;
            $addFriend->type='send';
            $addFriend->status=0;
            $addFriend->save();

            $addFriend=new ContactList();
            $addFriend->user_id_1=$request->friendID;
            $addFriend->user_id_2=Auth::user()->id;
            $addFriend->type='receive';
            $addFriend->status=0;
            $addFriend->save();

            return response()->json(['status'=>true,'message'=> 'Contact request added successfully.']);
        }else{
            return response()->json(['status'=>false,'message'=> 'You have already sent request to this contact']);
        }

    }

    public function acceptContactRequest(Request $request){

        $addFriend=ContactList::where("user_id_1", Auth::user()->id)->where('user_id_2',$request->friendID)->first();
        $addFriend->status=1;
        $addFriend->save();

        $addFriend=ContactList::where("user_id_2", Auth::user()->id)->where('user_id_1',$request->friendID)->first();
        $addFriend->status=1;
        $addFriend->save();
        return response()->json(['status'=>true,'message'=> 'Contact request added successfully.']);
    
    }
}
