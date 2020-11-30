<?php

namespace App\Http\Controllers;

use App\Models\note;
use App\Models\bean;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $beans = Bean::all();
        return view('cuppingnote.index', compact('notes','beans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beans = Bean::all();
        return view('cuppingnote.addNote', compact('beans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'bean_id' => 'required',
            'body_level' => 'required',
            'cupping_note' => 'required',
            'aftertaste' => 'required',
            'acidity_level' => 'required',
    ]);

        Note::create([
            'bean_id' => $data['bean_id'],
            'body_level' => $data['body_level'],
            'cupping_note' => $data['cupping_note'],
            'aftertaste' => $data['aftertaste'],
            'acidity_level' => $data['acidity_level'],

        ]);

        return redirect('/note');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(note $note)
    {
        return view('cuppingnote.editNote', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, note $note)
    {
        $note->update($request->all());
        return redirect('/note');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(note $note)
    {
        $note->delete();
        return redirect('/note');
    }
}
