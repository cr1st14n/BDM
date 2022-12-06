<?php

namespace App\Http\Controllers;

use App\Models\meet;
use App\Http\Requests\StoremeetRequest;
use App\Http\Requests\UpdatemeetRequest;

class MeetController extends Controller
{
    public function view_1()
    {
        return view('meet.view_1');
    }
    public function view_2()
    {
        return view('meet.view_form_create');
    }
}
