<?php
namespace PM\Repositories;

use PM\Models\Project;
use Illuminate\Http\Request;

class ProjectRepository 
{
    public function getAll()
    {
        return Project::all();
    }

    public function getbyId($id)
    {
        return Project::find($id);
    }
}
