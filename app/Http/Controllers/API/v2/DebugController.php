<?php

namespace App\Http\Controllers\API\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Debugger;

class DebugController extends Controller
{
    public function debuggers($data){
        $debug=new Debugger();
        $debug->response=json_encode($data);
        $debug->save();
    }
}
