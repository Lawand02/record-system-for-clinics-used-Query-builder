<?php

namespace App\Http\Controllers;

use App\Models\healthe;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HealtheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // for Get informaion in database and show him 
        $patients=DB::table('healthes')->get();
        return view('patient',compact('patients'));
        //return view('patient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('healthes')->insert([
        // for added informaion in form to database     
        // 'database_column'=> $request-> name form
        'First_name'=>$request->First_name,
        'Last_name'=>$request->Last_name,
        'State'=>$request->State,
        'The_disease'=>$request->The_disease,
        'Address'=>$request->Address,
        'Date'=>$request->Date,
        'Doctor_name'=>$request->Doctor_name
        ]);
        //return response('successfully');
        return redirect()->route('healthe');
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
     * @param  \App\Models\healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients=DB::table('healthes')->where('id',$id)->first();
        return view('viewpatient',compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $patients= DB::table('healthes')->where('id',$id)->first();
      return view('editpatient',compact('patients'));
      //return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        DB::table('healthes')->where('id',$id)->update([
            'First_name'=>$request->First_name,
            'Last_name'=>$request->Last_name,
            'State'=>$request->State,
            'The_disease'=>$request->The_disease,
            'Address'=>$request->Address,
            'Date'=>$request->Date,
            'Doctor_name'=>$request->Doctor_name
        ]);
      return redirect()->route('healthe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\healthe  $healthe
     * @return \Illuminate\Http\Response
     */
    public function destroy(healthe $healthe)
    {
        //
    }
    public function deleteAll(){ 
        //truncate for resete id
        DB::table('healthes')->truncate();
        return redirect()->route('healthe');
    }

    public function trush($id){

        DB::table('healthes')->where('id',$id)->delete();
        return redirect()->route('healthe');
    }

    
}
