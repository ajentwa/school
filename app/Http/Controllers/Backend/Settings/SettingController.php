<?php

namespace App\Http\Controllers\Backend\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Fees\Feetype;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feetypes = Feetype::orderBy('feetype_id','ASC')->get();
        return view('Backend/Settings/index', compact('feetypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/Settings/create');
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
            'name' => ['required','string','max:255'],
            'amount' => ['required','string','max:255'],
        ]);
       
        // Create Subject
        $feetype = new Feetype;
        $feetype->name = $request->input('name');
        $feetype->amount = $request->input('amount');
        $feetype->save();
        return redirect('/setting')->with('success', 'Fee Settings Successfully Added!');
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
    public function edit($feetype_id)
    {
        $feetype = Feetype::find($feetype_id);
        return view('Backend/Settings/edit', compact('feetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $feetype_id)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'amount' => ['required','string','max:255'],
        ]);

        // Update Subject
        $feetype = Feetype::find($feetype_id);
        $feetype->name = $request->input('name');
        $feetype->amount = $request->input('amount');
        $feetype->save();
        return redirect('/setting')->with('success', 'Fee Settings Successfully Updated!');
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
