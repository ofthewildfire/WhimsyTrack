<?php

namespace App\Http\Controllers;

use App\Models\Sighting;

class SightingController extends Controller
{
    //
    public function store()
    {
        Sighting::create(request()->all());

        return redirect('/');
    }

    public function view(Sighting $sighting)
    {
        return view('view', [
            'sighting' => $sighting,
        ]);
    }
}
