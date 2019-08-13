<?php

namespace App\Http\Controllers\Backend\Fees\TuitionFee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\UserManagement\User;
use App\Models\Backend\Fees\Fee;

class TuitionfeestandardsevenController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fee::orderby('fee_id','DESC')->where(['class_id'=>'10', 'feetype_id'=>'1'])->paginate(10);
        return view('Backend/Fees/Tuitionfee/Standardseven/index', compact('fees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderby('name','ASC')->where(['role_id'=>'4', 'class'=>'Standard Seven'])->get();
        return view('Backend/Fees/Tuitionfee/Standardseven/create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'paid' => ['required','string','max:255'],
            'payer' => ['required','string','max:255'],
        ]);

        $amount = $request->input('amount');
        $paid = $request->input('paid');

        if($paid >= $amount) {
            $status = "Completed";
        }
        elseif($paid < $amount) {
            $status = "Not Completed";
        }

        // Create Tuition Fee Payment
        $fee = new Fee;
        $fee->feetype_id = $request->input('feetype_id');
        $fee->user_id = $request->input('name');
        $fee->class_id = $request->input('class_id');
        $fee->officer = $request->input('officer');
        $fee->amount = $amount;
        $fee->paid = $paid;
        $fee->payer = $request->input('payer');
        $fee->status = $status;
        $fee->save();

        return redirect('/tuitionfeestandardseven')->with('success', 'Tuition Fee Payment Added Successfully!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fee_id)
    {
        $fee = Fee::find($fee_id);
        return view('Backend/Fees/Tuitionfee/Standardseven/show', compact('fee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fee_id)
    {
        $fee = Fee::find($fee_id);
        $users = User::orderby('name','ASC')->where(['role_id'=>'4', 'class'=>'Standard Seven'])->get();
        return view('Backend/Fees/Tuitionfee/Standardseven/edit', compact('fee','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fee_id)
    {
        $this->validate($request,[
            'paid' => ['required','string','max:255'],
            'payer' => ['required','string','max:255'],
        ]);

        $amount = $request->input('amount');
        $paid = $request->input('paid');

        if($paid >= $amount) {
            $status = "Completed";
        }
        elseif($paid < $amount) {
            $status = "Not Completed";
        }

        // Update Tuition Fee Payment
        $fee = Fee::find($fee_id);
        $fee->feetype_id = $request->input('feetype_id');
        $fee->user_id = $request->input('name');
        $fee->class_id = $request->input('class_id');
        $fee->officer = $request->input('officer');
        $fee->amount = $amount;
        $fee->paid = $paid;
        $fee->payer = $request->input('payer');
        $fee->status = $status;
        $fee->save();

        return redirect('/tuitionfeestandardseven')->with('success', 'Tuition Fee Payment Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($fee_id)
    {
        $fee = Fee::find($fee_id);
        $fee->delete(); 
        return redirect('/tuitionfeestandardseven')->with('success', 'Tuition Fee Payment Successfully Deleted!');
    }
}
