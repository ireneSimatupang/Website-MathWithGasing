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
        $admin->is_approved = '0';

        $admin->save();

        $regisAdmins = Admin::where("is_approved","0")->get(); 
        $newAdmins = Admin::where("is_approved","1")->get();
        
        return view('akun-admin.akun-admin', compact('regisAdmins','newAdmins'));
    }

    public function updateStatus($id)
    {
        $admin = Admin::findOrFail($id);
    
        // Update status based on current value
        $admin->status = ($admin->status == 'active') ? 'non-active' : 'active';
    
        $admin->save();
    
        $statusTranslation = $admin->status == 'active' ? 'telah aktif' : 'telah dinonaktifkan';
    
        // Set a flash message for the alert on the same page using a single 'success' key
        session()->flash('success', "Status admin {$admin->name} $statusTranslation.");

        $regisAdmins = Admin::where("is_approved","0")->get(); 
        $newAdmins = Admin::where("is_approved","1")->get();
    
        return view('akun-admin.akun-admin', compact('regisAdmins','newAdmins'));
    }

  
}
