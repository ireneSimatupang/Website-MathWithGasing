<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageAdmin()
    {
        $regisAdmins = Admin::where("is_approved","0")->get(); 
        $newAdmins = Admin::where("is_approved","1")->get();
        
        return view('akun-admin.akun-admin', compact('regisAdmins','newAdmins'));
    }

    public function approvedAdmin($id)
    {
        $admin = Admin::find($id);
        $admin->is_approved = 0;

        $admin->save();

        $regisAdmins = Admin::where("is_approved","0")->get(); 
        $newAdmins = Admin::where("is_approved","1")->get();
        
        return view('akun-admin.akun-admin', compact('regisAdmins','newAdmins'));
    }

  
}
