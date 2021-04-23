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
            'blok' => ['required', 'numeric', 'min:1', 'max:4'],
            'cursus' => ['required', 'alpha_dash'],
            'toets' => ['nullable', 'required_with:ec', 'alpha_dash'],
            'weging' => ['required', 'numeric', 'min:0', 'max:100'],
            'ec' => ['nullable', 'required_with:toets', 'numeric', 'min:0', 'max:20'],
            'cijfer' => ['nullable', 'numeric', 'min:1', 'max:10']
        ],
        [
            'blok.required' => 'Een schooljaar heeft 4 blokken, kies een blok tussen de 1 en 4 alsjeblieft.',
            'blok.numeric' => 'Een schooljaar heeft 4 blokken, kies een blok tussen de 1 en 4 alsjeblieft.',
            'blok.min' => 'Een schooljaar heeft 4 blokken, kies een blok tussen de 1 en 4 alsjeblieft.',
            'blok.max' => 'Een schooljaar heeft 4 blokken, kies een blok tussen de 1 en 4 alsjeblieft.',
            'cursus.required' => 'Je moet de naam van het vak aangeven.',
            'cursus.alpha_dash' => 'Gebruik alsjeblieft alleen alfabetische karakters en nummers.',
            'toets.required_with' => 'Om studiepunten (EC) te verdienen moet je een toets maken.',
            'toets.alpha_dash' => 'Gebruik alsjeblieft alleen alfabetische karakters en nummers.',
            'weging.required' => 'Een cursus heeft een weging nodig.',
            'weging.numeric' => 'De weging moet een getal zijn tussen de 0 en 100 en gebruikt punt (.) notatie in plaats van komma notatie (,).',
            'weging.min' => 'De weging moet een getal zijn tussen de 0 en 100.',
            'weging.max' => 'De weging moet een getal zijn tussen de 0 en 100.',
            'ec.required_with' => 'Hoeveel studiepunten (EC) krijg je voor deze toets?',
            'ec.numeric' => 'Een cursus geeft tussen de 0 en 20 studiepunten (EC).',
            'ec.min' => 'Een cursus geeft tussen de 0 en 20 studiepunten (EC).',
            'ec.max' => 'Een cursus geeft tussen de 0 en 20 studiepunten (EC).',
            'cijfer.numeric' => 'Een behaald cijfer is tussen de 1 en 10 en gebruikt punt (.) notatie in plaats van komma notatie (,).',
            'cijfer.min' => 'Het behaalde cijfer kan nooit lager dan een 1 zijn of hoger dan een 10.',
            'cijfer.max' => 'Het behaalde cijfer kan nooit lager dan een 1 zijn of hoger dan een 10.'
        ]);
        return $validated;
    }
}

