<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{

    public function index() {
        return view('task.index');
    }


    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'due_date' => 'required',
            'priority' => 'required',
//            'status' => 'required',
        ]);

        $validated['user_id'] = Auth::id();

        Task::create($validated);
        return redirect('/tasks')->with(['success' => 'Tache creer!']);

    }


    public function create(){
        return view('task.create');
    }


    public function show(Task $task){
        return view('task.edit', ['task' => $task]);
    }


    public function edit (Request $request,Task $task){

            $validated = $request->validate([
                'title' => 'required|max:30',
                'description' => 'required|max:50',
                'due_date' => 'required',
                'priority' => 'required',
//              'status' => 'required',
            ]);

            $task->update($validated);
            flash()->success('La tache a ete modifier');
            return redirect('/tasks');

    }
}
