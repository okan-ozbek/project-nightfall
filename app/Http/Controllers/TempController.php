<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TempController extends Controller
{
    public function viewInertia(): \Inertia\Response
    {
        return Inertia::render('FirstPage', ['message' => 'Hello, I have been sent from the controller : )']);
    }
}
