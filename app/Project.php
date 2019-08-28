<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Fillable fields
    protected $fillable = [
        'title','description'
    ];
    // OR if you know that the data you 
    // are going to pass
    // will be always at the correct format 
    // protected $guarded=[]; 
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);
    //    return Task::create([
    //         'project_id' => $this->id,
    //         'description'=> $description
    //     ]);
    }
}
