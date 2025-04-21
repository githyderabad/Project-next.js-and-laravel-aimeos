<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class AdminController extends Controller
{
     public function dashboard()
    {
        $vendorCount = User::role('vendor')->count();
        return Inertia::render('Admin/Dashboard', ['vendorCount' => $vendorCount]);
    }
}
