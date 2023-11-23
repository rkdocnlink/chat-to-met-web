<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactList;
use Illuminate\Support\Facades\Auth;

class FriendManagementController extends Controller
{
    //
    public function addContact(Request $request){
        if ($request->ajax()) {
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
                return response()->json(['status'=>false,'message'=> 'You have aleadry sent request to this contact']);
            }
            
        }
    }
    public function acceptContact(Request $request){
        if ($request->ajax()) {
           
                $addFriend=ContactList::where("user_id_1", Auth::user()->id)->where('user_id_2',$request->friendID)->first();
                $addFriend->status=1;
                $addFriend->save();

                $addFriend=ContactList::where("user_id_2", Auth::user()->id)->where('user_id_1',$request->friendID)->first();
                $addFriend->status=1;
                $addFriend->save();
                return response()->json(['status'=>true,'message'=> 'Contact request added successfully.']);
           
        }
    }
}
