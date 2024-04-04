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
            'teamMembers' => Member::all()->filter(static fn ($member) =>
            !str_contains(strtolower($member->getTranslation('position', 'en')), 'ceo'))
                ->take(3),
            'vacations' => Vacation::all(),
        ]);
    }
}
