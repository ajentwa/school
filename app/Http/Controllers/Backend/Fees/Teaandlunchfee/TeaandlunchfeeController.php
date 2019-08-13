<?php

namespace App\Http\Controllers\Backend\fees\Teaandlunchfee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeaandlunchfeeController extends Controller
{
    public function index()
    {
        return view('Backend/Fees/Teaandlunchfee/index');
    }
}
