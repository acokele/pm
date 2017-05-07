<?php
namespace PM\Repositories;

use Illuminate\Http\Request;

class ProjectRepository 
{
    public function getAll()
    {
        return ["a" => 1];
    }

    public function getbyId($id)
    {
        return "2";
    }
}
