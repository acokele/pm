<?php
namespace PM\Repositories;

use PM\Models\Task;
use Illuminate\Http\Request;

class TaskRepository 
{
    public function getAll()
    {
        return ["a" => 1];
    }

    public function getbyId($id)
    {
        return Task::find($id);
    }
}
