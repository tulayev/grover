<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allProjects = Project::all();
        $ongoingProjects = $allProjects->where('finished_at', null);

        return view('pages.home', [
            'allProjects' => $allProjects,
            'ongoingProjects' => $ongoingProjects,
            'testimonials' => Testimonial::all(),
            'teamMembers' => Member::take(3)->get(),
        ]);
    }
}
