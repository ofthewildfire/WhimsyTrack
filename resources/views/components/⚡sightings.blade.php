<?php

use App\Models\Sighting;
use Livewire\Component;

new class extends Component {
    public function with()
    {
        return [
            'sightings' => Sighting::all(),
        ];
  }
};
?>

<div>
    @foreach($sightings as $sighting)
        <a href="/sighting/{{$sighting->id}}">
            <li>{{$sighting->location}}</li>
        </a>
    @endforeach
</div>
