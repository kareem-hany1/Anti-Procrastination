<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Project extends Component
{
    public $filter ='';
    public $date_filter = 'none';
    public $date_creation ='none';
    public $priority='all';
    public $dues = 'all';
    public function render()
    {

        $query = Auth::User()->projects()->withCount(['steps as taskDone' => fn($q) => $q->where('status', 'completed')]);
        if($this->date_filter == 'none'){
            $query;
        }else{
            $query->orderBy('due_date', $this->date_filter);
        }


        if($this->date_creation == 'none'){
            $query->orderBY('created_at', 'desc');
        }else{
            $query->orderBy('created_at', $this->date_creation);
        }

        $projects =   $query->paginate(5)->withPath('/projects');


        return view('livewire.project', ['projects' => $projects]);
    }

    public function changeStatus(\App\Models\Project $project){
        Gate::authorize('steps', $project);
        if($project->status == 'completed'){
            $project->status = 'todo';
        }else{
            $project->status = 'completed';
            flash()->success('Bravo !');
        }
        $project->save();
    }

    public function changeDateFilter (){

        if($this->date_filter == 'none'){
            $this->date_filter = 'asc';
        }elseif($this->date_filter == 'asc'){
            $this->date_filter = 'desc';
        }else{
            $this->date_filter = 'none';
        }

    }


    public function changeDateCreation (){

        if($this->date_creation == 'none'){
            $this->date_creation = 'asc';
        }elseif($this->date_creation == 'asc'){
            $this->date_creation = 'desc';
        }else{
            $this->date_creation = 'none';
        }

    }

    public function destroy(\App\Models\Project $project){
        $project->delete();
        flash()->success('Projet supprimé');
    }
}
