<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'blok' => ['required'],
            'cursus' => ['required'],
            'toets' => ['required'],
            'weging' => ['required'],
            'ec' => ['required'],
            'cijfer' => ['required']
        ]);

        dd($request);
        $assignment = new Assignment();
        $assignment->blok = request('blok');
        $assignment->cursus = request('cursus');
        $assignment->toets = request('toets');
        $assignment->weging = request('weging');
        $assignment->ec = request('ec');
        $assignment->cijfer = request('cijfer');
        $assignment->save();
        return redirect('/assignments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        return view('assignments.edit', compact('assignment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'blok' => ['required'],
            'cursus' => ['required'],
            'toets' => ['required'],
            'weging' => ['required'],
            'ec' => ['required'],
            'cijfer' => ['required']
        ]);

        dd($request);
        $assignment->blok = request('blok');
        $assignment->cursus = request('cursus');
        $assignment->toets = request('toets');
        $assignment->weging = request('weging');
        $assignment->ec = request('ec');
        $assignment->cijfer = request('cijfer');
        $assignment->save();
        return redirect('/assignments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Assignment $assignment)
    {
        $assignment->delete($request->all());
        return redirect('/assignments.index');
    }
}
