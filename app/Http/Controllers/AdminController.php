<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AdminController extends Controller
{
    public function dashboard(): \Inertia\Response
    {
        return Inertia::render('admin/Dashboard');
    }
}
