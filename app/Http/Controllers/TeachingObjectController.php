<?php

namespace App\Http\Controllers;

use App\TeachingObject;
use App\User;
use App\Tag;
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
      $teachingObjects = TeachingObject::all();//llamada al modelo
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
      $tags = Tag::all();
      return view('teachingObject.create',['users' => $users, 'tags' => $tags]);
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
      $teachingObject->tags()->attach($request->input('selectTags'));
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
        return view('teachingObject.show',['teachingObject'=> $teachingObject]);
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
      $tags = Tag::all();
      return view('teachingObject.update',['teachingObject'=> $teachingObject, 'users' => $users, 'authors' => $this->getIds($teachingObject->authors), 'tags' => $tags, 'selectTags'=> $this->getIds($teachingObject->tags)]);
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
      $teachingObject->authors()->detach($this->getIds($teachingObject->authors));
      $teachingObject->authors()->attach($request->input('authors'));
      $teachingObject->tags()->detach($this->getIds($teachingObject->tags));
      $teachingObject->tags()->attach($request->input('selectTags'));
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

    private function getIds($objects)
    {
      $ids = [];
      foreach ($objects as $object) {
        $ids[] = $object->id;
      }
      return $ids;
    }
}
