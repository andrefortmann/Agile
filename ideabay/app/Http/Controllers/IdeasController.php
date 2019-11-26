<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use App\User;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ideas = Idea::all();
        //$ideas = Idea::orderBy('title', 'desc')->get();
        return view('ideas.index')->with('ideas', $ideas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       /**  $this->validate($request, [
          *  'title' => 'required',
           * 'abstract' => 'required',
            *'abstract' => 'description',
            *'abstract' => 'keyword',
        *]);
        */

        $idea = new Idea;
        $idea->title = $request->input('title');
        $idea->abstract = $request->input('abstract');
        $idea->description = $request->input('description');
        $idea->keyword = $request->input('keyword');
        $idea->user_id = auth()->user()->id;
        $idea->save();

        return redirect('/')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idea = Idea::find($id);
        $author = User::where('id', $idea->user_id)->get()[0];
        return view('ideas.show', compact('idea','author'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $idea = Idea::find($id);
        
        //Check if post exists before deleting
        if (!isset($idea)){
            return redirect('/profile')->with('error', 'No Ideas Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$idea->user_id){
            return redirect('/profile')->with('error', 'Unauthorized Page');
        }
        $idea->delete();
        return redirect('/profile')->with('success', 'Idea Removed');
    }
}
