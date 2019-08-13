<?php

namespace App\Http\Controllers\Backend\Fees\TuitionFee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TuitionfeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend/Fees/Tuitionfee/index');
    }
}
