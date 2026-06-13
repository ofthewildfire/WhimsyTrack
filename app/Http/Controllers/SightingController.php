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

    public function update(Sighting $sighting)
    {

        $sighting->update(request()->all());

        return redirect('/sighting/'.$sighting->id);
    }

    public function edit(Sighting $sighting)
    {
        return view('edit', [
            'sighting' => $sighting,
        ]);
    }

    public function destroy(Sighting $sighting)
    {
        $sighting->delete();

        return redirect('/');
    }
}
