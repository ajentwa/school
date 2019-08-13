<?php

namespace App\Http\Controllers\Backend\fees\Uniformfee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UniformfeeController extends Controller
{
    public function index()
    {
        return view('Backend/Fees/Uniformfee/index');
    }
}
