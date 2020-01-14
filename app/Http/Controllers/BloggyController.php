<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bloggy;

class BloggyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bloggy = bloggy::all();
        return view('home',compact('bloggy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        bloggy::create([
            'judul' => $request->judul,
            'headline' => $request->headline,
            'isi' => $request->isi,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('bloggy.index') ->with('success', 'Success added data');
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
        $bloggy = bloggy::find($id);
        return view('edit', ['bloggy' => $bloggy]);
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
        bloggy::find($id)->update($request->all());
        return redirect()->route('bloggy.index')->with('success','Success edited data');
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
        bloggy::find($id)->delete();
        return redirect()->route('bloggy.index')->with('success','Success deleted');
    }
}
