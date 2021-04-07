<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Jobs\UpdateProjectCost;

class ToolController extends Controller
{
    public function updateProjectCost()
    {
        $projects = Project::all();
        // dd($projects);

        foreach ($projects as $project) {
            // dump($project);
            UpdateProjectCost::dispatch($project);
        }
    }
}
