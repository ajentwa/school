<?php

namespace App\Http\Controllers\Backend\UserManagement\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\UserManagement\User;

class StudentController extends Controller
{
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
        return view('Backend/UserManagement/Students/index', compact('students_nursery','students_primary'));
    }

    public function nursery()
    {
        $babyclass = User::where(['role_id'=>'4', 'class'=>'Baby Class'])->get();
        $kinderone = User::where(['role_id'=>'4', 'class'=>'kindergateen One'])->get();
        $kindertwo = User::where(['role_id'=>'4', 'class'=>'kindergateen Two'])->get();
        return view('Backend/UserManagement/Students/nursery', compact('babyclass','kinderone','kindertwo'));
    }

    public function primary()
    {
        $stdone = User::where(['role_id'=>'4', 'class'=>'Standard One'])->get();
        $stdtwo = User::where(['role_id'=>'4', 'class'=>'Standard Two'])->get();
        $stdthree = User::where(['role_id'=>'4', 'class'=>'Standard Three'])->get();
        $stdfour = User::where(['role_id'=>'4', 'class'=>'Standard Four'])->get();
        $stdfive = User::where(['role_id'=>'4', 'class'=>'Standard Five'])->get();
        $stdsix = User::where(['role_id'=>'4', 'class'=>'Standard Six'])->get();
        $stdseven = User::where(['role_id'=>'4', 'class'=>'Standard Seven'])->get();
        return view('Backend/UserManagement/Students/primary', compact('stdone','stdtwo','stdthree','stdfour','stdfive','stdsix','stdseven'));
    }
}
