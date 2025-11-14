<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Project extends Component
{
    public $filter ='';
    public function render()
    {
        $projects = Auth::User()->projects()->withCount(['steps as taskDone' => fn($q) => $q->where('status', 'completed')] )->paginate(5)->withPath('/projects');


        return view('livewire.project', ['projects' => $projects]);
    }
}
