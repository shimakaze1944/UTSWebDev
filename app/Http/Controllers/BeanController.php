<?php

namespace App\Http\Controllers;

use App\Models\bean;
use Illuminate\Http\Request;

class BeanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beans=Bean::all();
        return view('beans.index', compact('beans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beans.addBean');
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
              'bean_name' => 'required|string',
              'bean_type' => 'required|string',
              'origin' => 'required|string',
        ]);
        Bean::create([
            'bean_name' => $data['bean_name'],
            'bean_type' => $data['bean_type'],
            'origin' => $data['origin'],
        ]);
        return redirect('/bean');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bean  $bean
     * @return \Illuminate\Http\Response
     */
    public function show(bean $bean)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bean  $bean
     * @return \Illuminate\Http\Response
     */
    public function edit(bean $bean)
    {
        return view('beans.editBean', compact('bean'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bean  $bean
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bean $bean)
    {
        $bean->update($request->all());
        return redirect('/bean');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bean  $bean
     * @return \Illuminate\Http\Response
     */
    public function destroy(bean $bean)
    {
        $bean->delete();
        return redirect('/bean');
    }
}
