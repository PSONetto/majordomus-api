<?php

namespace App\Http\Controllers;

use App\Models\Priority;

class PriorityController extends Controller
{
    public function index()
    {
        return Priority::all();
    }
}
