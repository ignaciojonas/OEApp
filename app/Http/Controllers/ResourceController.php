<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;


class ResourceController extends Controller
{

    public $types = ['Audio','Video', 'Imagen', 'Documento','Link'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $resources = Resource::all();
      return view('Resource.index',['resources' => $resources]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Resource.create',['types' => $this->types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $resource = Resource::create($request->all());
      if(isset($request->document)){
        $resource->path = $request->document->store('resources');
        $resource->save();
      }
      return redirect()->route('resource.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        return view('Resource.show',['resource'=> $resource]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('Resource.update',['resource'=> $resource, 'types' => $this->types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
      $resource->update($request->all());
      if(isset($request->document)){
        $resource->path = $request->document->store('resources');
        $resource->save();
      }

      return redirect()->route('resource.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->route('resource.index');
    }
}
