<?php

use App\Models\Sighting;
use Livewire\Component;

new class extends Component {
    public function with()
    {

$counts = Sighting::select(Sighting::raw('COUNT(goblin) as goblin_total'), 'goblin')
    ->groupByRaw('goblin')
    ->get();

        return [
            'sightings' => Sighting::simplePaginate(10),
            'counts' => $counts
        ];
  }
};
?>

<div>
    <div style="display: flex; gap: 2.5em; margin-bottom: 1em;">
        @foreach($counts as $count)
            <span style="border-radius: 8px; background-color: orange; color: white; padding: .25em .75em;">{{$count->goblin}} {{$count->goblin_total}} </span>
        @endforeach
    </div>


    @foreach($sightings as $sighting)
        <a style="color: purple; font-weight: 700; text-decoration: underline 2px solid green;" href="/sighting/{{$sighting->id}}">
            <li> Record # {{$sighting->id}}  - {{$sighting->location}}</li>
        </a>
    @endforeach

    <br>
    {{ $sightings->links() }}
</div>
