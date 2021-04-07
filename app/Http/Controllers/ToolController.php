<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ToolController extends Controller
{
    public function updateProjectCost()
    {
        $projects = Project::all();
        dd($projects);
    }
}
