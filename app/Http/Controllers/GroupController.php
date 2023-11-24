<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ChatGroup;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function addGroup(Request $request)
    {
        $group = new ChatGroup();
        $group->name = $request->group_name;
        $group->icon = "121";
        $group->type = "121";
        $group->DESC = $request->group_desc;
        $group->group_admin = Auth::user()->id;
        $group->participants = "121";
        $group->status = 1;
        $group->save();
        return redirect()->route('add-group');

        if ($request->ajax()) {
            if (User::Auth::user()->id) {

                $group = new ChatGroup();
                $group->name = $request->group - name;
                $group->icon = "121";
                $group->type = "121";
                $group->desc = $request->group - desc;
                $group->group_admin = Auth::user()->id;
                $group->participants = "121";
                $group->status = 1;
                $group->save();
                return response()->json(['status' => true, 'message' => 'Contact request added successfully.']);
            } else {
                return response()->json(['status' => false, 'message' => 'You have aleadry sent request to this contact']);
            }

        }
    }

    public function viewGroupDashboard(Request $request)
    {
        $group = ChatGroup::where('group_admin',Auth::user()->id);
        return view('group-chat',compact('group'));
    }

}
