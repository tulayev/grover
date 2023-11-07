<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Vacation;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('pages.team', [
            'teamMembers' => Member::all(),
            'vacations' => Vacation::all(),
        ]);
    }
}
