<?php

namespace App\Http\Controllers;

use App\Moment;
use App\Record;
use Illuminate\Http\Request;

class MomentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $moments = Moment::all();
      return view('Moment.index',['moments' => $moments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Moment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $moment = Moment::create($request->all());
      $teachers_record = $request->input('teachersRecord');
      $classroom_record = $request->input('classroomRecord');
      $moment->teachers_record_id = Record::create(['record' => $teachers_record])->id;
      $moment->classroom_record_id = Record::create(['record' => $classroom_record])->id;
      $moment->save();

      return redirect()->route('moment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function show(Moment $moment)
    {
        return view('Moment.show',['moment'=> $moment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function edit(Moment $moment)
    {
        return view('Moment.update',['moment'=> $moment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moment $moment)
    {
      $moment->update($request->all());
      $teachersRecord = $moment->teachersRecord();
      $classroomRecord = $moment->classroomRecord();
      $teachersRecord->record = $request->input('teachersRecord');
      $classroomRecord->record = $request->input('classroomRecord');
      $teachersRecord->save();
      $classroomRecord->save();

      return redirect()->route('moment.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moment $moment)
    {
        $moment->delete();
        return redirect()->route('moment.index');
    }
}
