<x-main-app>
    <h1>Rainbow Goblin Farming Tracker</h1>
    <p>Seriously because we all want those freaking wings.</p>

{{--    <div>--}}
{{--        <h2>Status Count</h2>--}}
{{--        @foreach($counts as $count)--}}
{{--            <span>{{$count->goblin}} - {{count($counts)}} </span>--}}
{{--        @endforeach--}}
{{--    </div>--}}

    <div>
        <livewire:sightings />
    </div>



</x-main-app>

