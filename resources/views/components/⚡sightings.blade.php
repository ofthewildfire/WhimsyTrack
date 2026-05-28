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
        <a style="color: purple; font-weight: 700; text-decoration: underline;" href="/sighting/{{$sighting->id}}">
            <li>{{$sighting->location}}</li>
        </a>
    @endforeach
</div>
