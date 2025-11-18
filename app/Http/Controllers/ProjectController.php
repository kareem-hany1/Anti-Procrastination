<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

//           'status' => 'required',
        ]);

        $step->update($validated);
        flash()->success('Tache modifié');
        return redirect('/project/'.$step->project->id);


    }


    public function store(Project $project,Request $request){
        $validated = $request->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'due_date' => 'required',
            'priority' => 'required',
//           'status' => 'required',
        ]);
        $validated['user_id'] = Auth::id();

        $project->steps()->create($validated);
        flash()->success('Tache creé!');
        return redirect('/project/'.$project->id);
    }

     public function create(){
             return view('step.create');}


    public function editProject(Project $project){
            return view('project.edit', ['task' => $project]);
    }

    public function updateProject(Request $request, Project $project){
        $validated = $request->validate([
            'title' => 'required',
            'due_date' => 'required',
        ]);
//        $validated['user_id'] = Auth::id();
//        dd($validated);
        $project->update($validated);
        flash()->success('Projet Modifié');
        return redirect('/projects');
    }


    public function storeProject(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'due_date' => 'required',
        ]);
        auth()->user()->projects()->create($validated);
        flash()->success('Projet creé');
        return redirect('/projects');
    }

    public function createProject(){
        return view('project.create');
    }
}
