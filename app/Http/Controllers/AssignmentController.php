<?php

namespace App\Http\Controllers;

use DB;
use App\Assignment;
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
        return view('dashboard.index', compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $assignment = new Assignment();
        $assignment->blok = request('blok');
        $assignment->cursus = request('cursus');
        $assignment->toets = request('toets');
        $assignment->weging = request('weging');
        $assignment->ec = request('ec');
        $assignment->cijfer = request('cijfer');
        $assignment->save();
        return redirect('/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        return view('dashboard.edit', compact('assignment'));
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
        dd($request);
        $assignment->blok = request('blok');
        $assignment->cursus = request('cursus');
        $assignment->toets = request('toets');
        $assignment->weging = request('weging');
        $assignment->ec = request('ec');
        $assignment->cijfer = request('cijfer');
        $assignment->save();
        return redirect('/dashboard');
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
        return redirect('/dashboard');
    }
}
