<?php

namespace App\Livewire;

use App\Models\Step;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Tasks extends Component
{


    public $filter = 'all';
    public $dues='';
    public $priority = '';
    public $search = '';
    public $success;
    public $projectId;
    public function render()

    {
        $this->checkIfOneTaskPending();
        $project = $this->projectId;

        if($this->filter=='all'){
            $query = Step::where('project_id', $project)->where('title', 'like', '%' . $this->search . '%');

        }else{

            $query = Step::where('project_id', $project)->where('title', 'like', '%' . $this->search . '%')->where('status', $this->filter);
        }

        if($this->dues=='asc'){
            $query->orderBy('due_date', 'asc');
        }elseif($this->dues=='desc'){
            $query->orderBy('due_date', 'desc');
        }

        if($this->priority=='high'){
            $tasks =  $query->orderByRaw("FIELD(priority, 'high', 'medium', 'normal')")->paginate(7)->withPath('/tasks');
        }elseif($this->priority=='low'){
            $tasks =   $query->orderByRaw("FIELD(priority, 'normal', 'medium', 'high')")->paginate(7)->withPath('/tasks');
        }else{
            $tasks =  $query->orderByDesc('created_at')->paginate(7)->withPath('/tasks');
        }
        $tasks = $query->paginate(10)->withPath(request()->url());
        return view('livewire.tasks', [
            'tasks' => $tasks,
            'completed' =>Step::where('title', 'like', '%' . $this->search . '%')->where('status', 'completed')->where('project_id', $project)->orderByDesc('created_at')->count(),
            'all' => Step::where('title', 'like', '%' . $this->search . '%')->where('project_id', $project)->orderByDesc('created_at')->count(),
            'pending' =>Step::where('title', 'like', '%' . $this->search . '%')->where('project_id', $project)->where('status', 'pending')->orderByDesc('created_at')->count(),
            'todo' =>Step::where('title', 'like', '%' . $this->search . '%')->where('project_id', $project)->where('status', 'todo')->orderByDesc('created_at')->count()
        ]);
    }

    public function filterMenu($filter){
        $this->filter = $filter;
    }

    public function mount(){
        $this->projectId = request()->route('project');
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

    public function status(Step $step){
//        Gate::authorize('destroy', $task);
        if($step->status == 'todo'){
            $new_status = 'pending';
        }elseif($step->status == 'pending'){
            $new_status = 'completed';
        }else{
            $new_status = 'todo';
        }
        if($new_status == 'completed'){
            flash()->success('Bravo !!!!');
        }

        $step->update(['status' => $new_status]);

    }


    public function destroy(Step $step){
//        Gate::authorize('destroy', $task);
        $step->delete();
        flash()->success('La tache a ete supprimé');
    }

    public function remind(\App\Models\Step $step){
//        Gate::authorize('steps', $step);
        $status = $step->remind;
        $step->update(['remind' => !$step->remind]);
        if($status == 0){

            flash()->success('Un rappel vous sera envoyer via email pour cette tache !!');
        }else{
            flash()->error('Le rappel via email est desactivé pour cette tache');
        }

    }

    public function checkIfOneTaskPending(){
        $project = \App\Models\Project::where('id', $this->projectId)->first();
        if($project->status == 'todo'){
            $checkIfOneTaskpending = Step::where('status', 'pending')->orWhere('status', 'todo')->where('project_id', $project->id)->exists();
            if($checkIfOneTaskpending){
                $project->update(['status' => 'pending']);
            }
        }
    }
}
