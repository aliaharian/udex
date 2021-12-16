<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Model\Architectionary;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class ProfileArchitectionaryController extends Controller {
    public function show_list() {
        $Architectionary = Architectionary::orderBy('title', 'asc')->get()->all();
        return view('site.profile.architectionary.architectionary', compact('Architectionary'));
    }
}
