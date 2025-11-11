<?php

namespace App\Http\Controllers;

use App\Mail\Remind;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RemindController extends Controller
{
    public static function remind (){
        $users = \App\Models\User::with(['tasks' => fn($q) => $q->where('remind', 1)])->get();

        foreach($users as $user){
            foreach($user->tasks as $task){
                if(now()->toDateString() == $task->due_date && $task->status == 'todo'){
                    Mail::to($user->email)->queue(new Remind($user->fullname, $task->title));
                }
            }
        }

        return 'Mail sent';

    }
}
