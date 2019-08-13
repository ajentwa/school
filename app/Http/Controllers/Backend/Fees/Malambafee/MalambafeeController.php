<?php

namespace App\Http\Controllers\Backend\fees\Malambafee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MalambafeeController extends Controller
{
    public function index()
    {
        return view('Backend/Fees/Malambafee/index');
    }
}
