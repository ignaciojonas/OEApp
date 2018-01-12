<?php

namespace App\Http\Controllers;

use App\TeachingObject;
use App\User;
use Illuminate\Http\Request;

class TeachingObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::all();
      return view('teachingObjects.create',['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $teachingObject = TeachingObject::create($request->all());
      $teachingObject->authors()->attach($request->input('authors'));
      print_r("esa");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeachingObject  $teachingObject
     * @return \Illuminate\Http\Response
     */
    public function show(TeachingObject $teachingObject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeachingObject  $teachingObject
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachingObject $teachingObject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeachingObject  $teachingObject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeachingObject $teachingObject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachingObject  $teachingObject
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachingObject $teachingObject)
    {
        //
    }
}
