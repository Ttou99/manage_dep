<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\N_groupe;
use Illuminate\Http\Request;

class N_groupeController extends Controller
{
    public function index()
    {
        $n_groupes = N_groupe::all();

        return view('admin.groupes.index', compact('n_groupes'));
    }

    public function create()
    {
        $sections = Section::all();
        return view('admin.groupes.create', compact('sections'));
    }

    public function store(Request $request)
    {

        try {

            $n_groupe = new N_groupe();
            $n_groupe->name_n_groupe = $request->name_n_groupe;
            $n_groupe->sous_groupe = $request->sous_groupe;
            $n_groupe->section_id = $request->section_id;
            $n_groupe->save();

            return redirect()->route('groupes.index');

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }



    /**
     * Display the specified resource.
     */
    public function show(N_groupe $n_groupe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sections = Section::all();
        $n_groupes =  N_groupe::findOrFail($id);
        return view('admin.groupes.edit', compact('sections','n_groupes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $n_groupe = N_groupe::findorfail($request->id);
            $n_groupe->name_n_groupe = $request->name_n_groupe;
            $n_groupe->sous_groupe = $request->sous_groupe;
            $n_groupe->section_id = $request->section_id;
            $n_groupe->save();
            return redirect()->route('groupes.index');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(N_groupe $n_groupe)
    {
        try {
            $n_groupe->delete();
            return redirect()->route('groupes.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function getgroupes($id)
    {
        $list_groupes = N_groupe::where("section_id", $id)->pluck("name_n_groupe", "id");
        return $list_groupes;
    }
}
