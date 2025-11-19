<?php

namespace App\Policies;

use App\Models\Step;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StepPolicy
{
        public function steps(\Illuminate\Foundation\Auth\User $user, Step $step){
         return $step->user->is($user);
        }

}
