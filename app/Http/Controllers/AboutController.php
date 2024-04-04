<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about', [
            'ceo' => Member::all()->filter(static fn ($member) =>
                str_contains(strtolower($member->getTranslation('position', 'en')), 'ceo'))
        ]);
    }
}
