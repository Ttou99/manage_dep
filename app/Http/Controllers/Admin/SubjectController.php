<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academicyear;
use App\Models\Branch;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subjects.index', compact('subjects'));
    }

    public function create()
    {
        $academicyears = Academicyear::all();
        $branches = Branch::all();
        return view('admin.subjects.create', compact('academicyears','branches'));
    }

    public function store(Request $request)
    {

        try {

            $subject = new Subject();
            $subject->name_subject = $request->name_subject;
            $subject->semestre = $request->semestre;
            $subject->academicyear_id = $request->academicyear_id;
            $subject->branch_id = $request->branch_id;
            $subject->save();

            return redirect()->route('subjects.index');

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }



    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $academicyears = Academicyear::all();
        $branches = Branch::all();
        $subjects =  Subject::findOrFail($id);
        return view('admin.subjects.edit', compact('academicyears','branches','subjects'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $subject = Subject::findorfail($request->id);
            $subject->name_subject = $request->name_subject;
            $subject->semestre = $request->semestre;
            $subject->academicyear_id = $request->academicyear_id;
            $subject->branch_id = $request->branch_id;
            $subject->save();
            return redirect()->route('subjects.index');
        }

        catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        try {
            $subject->delete();
            return redirect()->route('subjects.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function getbranches($id)
    {
        $list_branches = Branch::where("academicyear_id", $id)->pluck("name_branch", "id");
        return $list_branches;
    }
}
