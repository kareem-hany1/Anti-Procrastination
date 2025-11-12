<?php

namespace App\Http\Controllers;

use App\Mail\Remind;

use App\Models\HasNotify;
use App\Models\Notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class RemindController extends Controller
{
    public static function remind (){
        $users = \App\Models\User::with(['tasks' => fn($q) => $q->where('remind', 1)])->get();
        $notifs = \App\Models\User::with('tasks' )->get();

        foreach($users as $user){
            foreach($user->tasks as $task){
                if($task->due_date->diffInDays(now()) <=2 && $task->status == 'todo'){
                    Mail::to($user->email)->queue(new Remind($user->fullname, $task->title));

                }
            }
        }

        foreach($notifs as $user){
            foreach($user->tasks as $task){
                if($task->due_date->diffInDays(now()) <= 2 && $task->status == 'todo'){
                    Notify::create(['user_id' => $user->id, 'title' => $task->title,'body' => 'Echeance proche, '. $task->description]);
                    HasNotify::where('user_id', $user->id)->update(['status' => true]);
                }
            }
        }

        return 'Mail sent';

    }
}
