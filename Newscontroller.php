<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\News;

class Newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
   /* public function news(){
        return view ('news');
    }
  */
    public function index()
    {
        $news=News::get();
        return view ('newslist',compact("news"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News;
        $news->newstitle = $request->title;
        $news->author = $request->author;
        $news->content= $request->content;
        if(isset( $request->Published)){
             $news->Published=true;
        }else{
             $news->Published=false;
        }
        $news->save();
        return 'News Added Successfully';

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $news = news::findOrFail($id); 
       return view ('eidtnews',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
