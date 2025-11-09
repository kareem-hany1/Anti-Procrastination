<?php

namespace App\Policies;

use App\Models\Task;


use Illuminate\Foundation\Auth\User;

class TaskPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function edit(User $user, Task $task): bool
    {
        return $task->user->is($user);
    }

    public function destroy(User $user, Task $task): bool
    {
        return $task->user->is($user);
    }

}
