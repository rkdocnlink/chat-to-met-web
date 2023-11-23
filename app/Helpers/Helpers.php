<?php

use App\Models\ContactList;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
  
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('check_contact_added_or_not')) {
    function check_contact_added_or_not($id1,$id2)
    {
        if(ContactList::where('user_id_1',$id1)->where('user_id_2',$id2)->where('status',1)->exists()){
           return 0;
        }else{
            return 1;
        }
    }
}

    if (! function_exists('contact_requests')) {
        function contact_requests($id1,$id2)
        {
            if(ContactList::where('user_id_2',Auth::user()->id)->where('status',0)->where('type','receive')->exists()){
              return   ContactList::where('user_id_2',Auth::user()->id)->where('status',0)->where('type','receive')->get();
            }else{
                return 1;
            }
        }
}
