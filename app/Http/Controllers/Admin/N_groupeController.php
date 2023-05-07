<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
use App\Models\Section;
use App\Models\N_groupe;
use Illuminate\Http\Request;

class N_groupeController extends Controller
{
    public function index()
    {
        $groupes = N_groupeController::all();

        return view('admin.groupes.index', compact('groupes'));
    }

    public function create()
    {
        $sections = Section::all();
        $groupes = Groupe::all();
        return view('admin.groupes.create', compact('sections','groupes'));
    }

    public function store(Request $request)
    {

        try {

            $n_groupe = new N_groupeController();
            $n_groupe->name_n_groupe = $request->name_n_groupe;
            $n_groupe->sous_groupe = $request->sous_groupe;
            $n_groupe->section_id = $request->section_id;
            $n_groupe->groupe_id = $request->groupe_id;
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
    public function show(N_groupeController $n_groupe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sections = Section::all();
        $groupes = Groupe::all();
        $n_groupes =  N_groupeController::findOrFail($id);
        return view('admin.groupes.edit', compact('sections','groupes','n_groupes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $n_groupe = N_groupeController::findorfail($request->id);
            $n_groupe->name_n_groupe = $request->name_n_groupe;
            $n_groupe->sous_groupe = $request->sous_groupe;
            $n_groupe->section_id = $request->section_id;
            $n_groupe->groupe_id = $request->groupe_id;
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
    public function destroy(N_groupeController $n_groupe)
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
        $list_groupes = Groupe::where("Section_id", $id)->pluck("name_groupe", "id");
        return $list_groupes;
    }
}
