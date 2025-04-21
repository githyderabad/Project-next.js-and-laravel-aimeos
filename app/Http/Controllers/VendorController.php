<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class VendorController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Vendor/Dashboard');
    }
}
