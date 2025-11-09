<?php

namespace App\Livewire;

use App\Models\Task;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Show extends Component
{
    public $search = '';
    public $filter = 'all';
    public $success;
    public $priority='all';
    public $dues = 'all';

    public function render()
    {


        if($this->filter=='all'){
            $query = Auth::user()->tasks()->where('title', 'like', '%' . $this->search . '%');

            if($this->dues=='asc'){
                $query->orderBy('due_date', 'asc');
            }elseif($this->dues=='desc'){
                $query->orderBy('due_date', 'desc');
            }


            if($this->priority=='high'){
                $tasks =  $query->orderByRaw("FIELD(priority, 'high', 'medium', 'normal')")->get();
            }elseif($this->priority=='low'){
                $tasks =   $query->orderByRaw("FIELD(priority, 'normal', 'medium', 'high')")->get();
            }else{
                $tasks =  $query->orderByDesc('created_at')->get();
            }

        }else{
            $query = Auth::user()->tasks()->where('title', 'like', '%' . $this->search . '%')
                ->where('status', $this->filter);
            if($this->dues=='asc'){
                $query->orderBy('due_date', 'asc');
            }elseif($this->dues=='desc'){
                $query->orderBy('due_date', 'desc');
            }
            if($this->priority=='high'){
                $tasks =  $query->orderByRaw("FIELD(priority, 'high', 'medium', 'normal')")->get();
            }elseif($this->priority=='low'){
                $tasks =   $query->orderByRaw("FIELD(priority, 'normal', 'medium', 'high')")->get();
            }else{
                $tasks =  $query->orderByDesc('created_at')->get();
            }
        }

        return view('livewire.show', ['tasks' => $tasks,
            'completed' =>Auth::user()->tasks()->where('title', 'like', '%' . $this->search . '%')->where('status', 'completed')->orderByDesc('created_at')->count(),
            'all' => Auth::user()->tasks()->where('title', 'like', '%' . $this->search . '%')->orderByDesc('created_at')->count(),
            'pending' =>Auth::user()->tasks()->where('title', 'like', '%' . $this->search . '%')->where('status', 'pending')->orderByDesc('created_at')->count(),
            'todo' =>Auth::user()->tasks()->where('title', 'like', '%' . $this->search . '%')->where('status', 'todo')->orderByDesc('created_at')->count()
        ]);
    }


    public function filterMenu($filter){
       $this->filter = $filter;
    }

    public function status(Task $task){
        Gate::authorize('destroy', $task);
        if($task->status == 'todo'){
            $new_status = 'pending';
        }elseif($task->status == 'pending'){
            $new_status = 'completed';
        }else{
            $new_status = 'todo';
        }
        if($new_status == 'completed'){
            $this->success = 'Bravo !';
        }

        $task->update(['status' => $new_status]);

    }


    public function destroy(Task $task){
        Gate::authorize('destroy', $task);
        $task->delete();
        $this->success = 'Task has been deleted';
    }

    public function priorit(){
        if($this->priority == 'all'){
            $this->priority = 'low';
        }elseif($this->priority == 'low'){
            $this->priority = 'high';
        }else{
            $this->priority = 'all';
        }
    }

    public function dues_date(){
        if($this->dues == 'all'){
            $this->dues = 'asc';
        }elseif($this->dues == 'asc'){
            $this->dues = 'desc';
        }else{
            $this->dues = 'all';
        }
    }
}

