<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\UserManagement\User;
use App\Models\Backend\Fees\Fee;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $babyclass = User::where(['role_id'=>'4', 'class'=>'Baby Class'])->get();
        $kinderone = User::where(['role_id'=>'4', 'class'=>'kindergateen One'])->get();
        $kindertwo = User::where(['role_id'=>'4', 'class'=>'kindergateen Two'])->get();
        $stdone = User::where(['role_id'=>'4', 'class'=>'Standard One'])->get();
        $stdtwo = User::where(['role_id'=>'4', 'class'=>'Standard Two'])->get();
        $stdthree = User::where(['role_id'=>'4', 'class'=>'Standard Three'])->get();
        $stdfour = User::where(['role_id'=>'4', 'class'=>'Standard Four'])->get();
        $stdfive = User::where(['role_id'=>'4', 'class'=>'Standard Five'])->get();
        $stdsix = User::where(['role_id'=>'4', 'class'=>'Standard Six'])->get();
        $stdseven = User::where(['role_id'=>'4', 'class'=>'Standard Seven'])->get();
        $babyclass = count($babyclass);
        $kinderone = count($kinderone);
        $kindertwo = count($kindertwo);
        $stdone = count($stdone);
        $stdtwo = count($stdtwo);
        $stdthree = count($stdthree);
        $stdfour = count($stdfour);
        $stdfive = count($stdfive);
        $stdsix = count($stdsix);
        $stdseven = count($stdseven);
        $students_nursery = $babyclass + $kinderone + $kindertwo;
        $students_primary = $stdone + $stdtwo + $stdthree + $stdfour + $stdfive + $stdsix + $stdseven;
        $teaandlunchfee = Fee::where('feetype_id','3')->get();
        $malambafee = Fee::where('feetype_id','5')->get();
        return view('Backend.dashboard', compact('students_nursery','students_primary','teaandlunchfee','malambafee'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
