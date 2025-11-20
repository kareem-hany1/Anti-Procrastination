<?php

namespace App\Http\Controllers;

use App\Mail\ProjectMail;
use App\Mail\Remind;

use App\Mail\StepMail;
use App\Models\HasNotify;
use App\Models\Notify;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class RemindController extends Controller
{
    public static function remind (){
        $users = \App\Models\User::with(['tasks' => fn($q) => $q->where('remind', 1)])->get();
        $notifs = \App\Models\User::with('tasks' )->get();
        $projects = User::with('projects')->get();
        $steps = Project::with(['user', 'steps' => fn($q) => $q->where('remind', 1)])->get();
        foreach($users as $user){
            foreach($user->tasks as $task){
                if($task->due_date->diffInDays(now()) <=2 && $task->status == 'todo'){
                    Mail::to($user->email)->queue(new Remind($user->fullname, $task->title));

                }
            }
        }

        foreach($steps as $step){
            foreach($step->steps as $us){
                if($us->due_date->diffInDays(now()) <=2 && $us->status == 'todo'){
                    Mail::to($step->user->email)->queue(new StepMail($step->user->fullname, $step->title, $us->title));

                }
            }
        }

        foreach($projects as $user){
            foreach($user->projects as $project){
                if($project->due_date->diffInDays(now()) <=2){
                    Mail::to($user->email)->queue(new ProjectMail($user->fullname, $project->title));
                }
            }
        }

        foreach($notifs as $user){
            foreach($user->tasks as $task){
                if($task->due_date->diffInDays(now()) <= 2   && $task->status == 'todo'){
                    Notify::create(['user_id' => $user->id, 'title' => $task->title,'body' => 'Echeance proche, '. $task->description]);
                    HasNotify::where('user_id', $user->id)->update(['status' => true]);
                }
            }
        }

        foreach($projects as $user){
            foreach($user->projects as $task){
                if($task->due_date->diffInDays(now()) <= 2){
                    Notify::create(['user_id' => $user->id, 'title' => $task->title,'body' => 'Echeance proche (projet)']);
                    HasNotify::where('user_id', $user->id)->update(['status' => true]);
                }
            }
        }


        foreach($steps as $step){
            foreach($step->steps as $us){
                if($us->due_date->diffInDays(now()) <=2 && $us->status == 'todo'){
                    Notify::create(['user_id' => $step->user->id, 'title' => $us->title,'body' => 'Echeance proche ('.$step->title.')']);
                    HasNotify::where('user_id', $step->user->id)->update(['status' => true]);
                }
            }
        }



        return 'Mail sent';

    }
}
