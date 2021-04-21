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
//        dd($request);
        $validated = $this->validateAssignment($request);
        Assignment::create($validated);
        return redirect(route('assignments.index'));
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
        $assignment->update(
            $this->validateAssignment($request)
        );
        return redirect(route('assignments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Assignment $assignment)
    {
        $assignment->delete();
        return redirect(route('assignments.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateAssignment(Request $request): array
    {
        $validated = $request->validate([
            'blok' => ['required'],
            'cursus' => ['required'],
            'toets' => ['required'],
            'weging' => ['required'],
            'ec' => ['required'],
            'cijfer' => ['required']
        ],
        [
            'blok.required' => 'Er moet ten minste 1 blok zijn en maximaal 4 blokken.',
            'cursus.required' => 'Je moet de naam van het vak aangeven.',
            'toets.required' => 'Ieder vak heeft een toets, omschrijf hier het soort toets.',
            'weging.required' => 'Een vak of een onderdeel daarvan heeft een weging nodig.',
            'ec.required' => 'Hoeveel studiepunten krijg je.',
            'cijfer.required' => 'Het behaalde cijfer kan nooit lager dan een 1 zijn of hoger dan een 10.'
        ]);
        return $validated;
    }
}

