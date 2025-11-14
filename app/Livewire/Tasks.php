<?php

namespace App\Livewire;

use App\Models\Step;
use Livewire\Component;

class Tasks extends Component
{
    public string $filter = '';
    public $all = '';
    public $todo ='';
    public $pending='';
    public $completed='';
    public $dues='';
    public $priority = '';
    public function render()
    {
        return view('livewire.tasks', ['tasks' => Step::where('project_id', request()->route('project'))->paginate(10)->withPath(request()->url())]);
    }
}
