<?php

namespace App\Http\Controllers;


use App\Models\Notify;
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
        flash()->success('Tache creé!');
        return redirect('/tasks');

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

    public function notify(){
        $notifs = Auth::user()->notifys()->paginate(50)->withPath('/notify');
        Auth::user()->hasnotify()->update(['status' => false]);
        return view('task.notify', compact('notifs'));
    }

    public function deleteNotify(Notify  $notify){
        $notify->delete();
        flash()->success('La tache a ete supprimer');
        return redirect()->back();
    }

    public function deleteNotifyAll(){
        Auth::user()->notifys()->delete();
        flash()->success('La tache a ete supprimer');
        return redirect()->back();
    }
}
