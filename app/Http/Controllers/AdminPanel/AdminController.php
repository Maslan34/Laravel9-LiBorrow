<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexAdmin(){
        echo "My Admin Panel";
        return view('admin.AdminIndex');
    }
}
