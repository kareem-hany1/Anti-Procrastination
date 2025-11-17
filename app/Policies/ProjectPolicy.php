<?php

namespace App\Policies;

use App\Models\Project;


use Illuminate\Foundation\Auth\User;

class ProjectPolicy
{
        public function steps(User $user, Project $project){
            return $project->user->is($user);
        }

}
