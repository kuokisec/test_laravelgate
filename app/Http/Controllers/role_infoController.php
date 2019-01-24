<?php

namespace App\Http\Controllers;

use App\Models\role_info;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class role_infoController extends Controller
{
    public function index()
    {
    
        $roleinfo = role_info::first();
        var_dump($roleinfo->msxxxx_role_code);
        //$this->authorize('view',$roleinfo);
        //dd($roleinfo->msxxxx_role_code);
        return true;
    }
}
