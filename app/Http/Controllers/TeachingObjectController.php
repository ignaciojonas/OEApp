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
      $teachingObjects = TeachingObject::all();
      return view('teachingObject.index',['teachingObjects' => $teachingObjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::all();
      return view('teachingObject.create',['users' => $users]);
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
      return redirect()->route('teachingObject.index');
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
      $users = User::all();
      return view('teachingObject.update',['teachingObject'=> $teachingObject, 'users' => $users, 'authors' => $this->getAuthorsIds($teachingObject->authors)]);
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
      $teachingObject->authors()->detach($this->getAuthorsIds($teachingObject->authors));
      $teachingObject->authors()->attach($request->input('authors'));
      
      $teachingObject->update($request->all());

      return redirect()->route('teachingObject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachingObject  $teachingObject
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachingObject $teachingObject)
    {
        $teachingObject->delete();
        return redirect()->route('teachingObject.index');
    }

  private function getAuthorsIds($authors)
  {
    $ids = [];
    foreach ($authors as $author) {
      $ids[] = $author->id;
    }
    return $ids;
  }
}
