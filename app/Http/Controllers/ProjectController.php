<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Step;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index(){
        return view('project.index');
    }

    public function show(){

            return view('project.show');
    }

    public function editStep(Step $step){
        return view('step.edit', ['task' => $step])     ;
    }

    public function updateStep(Request $request, Step $step){
        $validated = $request->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'due_date' => 'required',
            'priority' => 'required',

//              'status' => 'required',
        ]);

        $step->update($validated);
        flash()->success('Tache modifié');
        return redirect('/project/'.$step->project->id);


    }

}
