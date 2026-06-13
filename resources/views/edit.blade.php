<x-main-app>
<form action="/sighting/{{$sighting->id}}/update" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <label for="location">Location</label>
        <select name="location" id="location">
            <option value="{{$sighting->location}} selected"> {{$sighting->location}} </option>
            <option value="Cathedral Level 1">Cathedral Level 1</option>
            <option value="Cathedral Level 2">Cathedral Level 2</option>
            <option value="Cathedral Level 3">Cathedral Level 3</option>
            <option value="Leoric's Passage">Leoric's Passage</option>
            <option value="Leoric's Hunting Grounds">Leoric's Hunting Grounds</option>
            <option value="Northern Highlands">Northern Highlands</option>
            <option value="Royal Crypts">Royal Crypts</option>
            <option value="Southern Highlands">Southern Highlands</option>
            <option value="Cave of the Moon Clan Level 1">Cave of the Moon Clan Level 1</option>
            <option value="Cave of the Moon Clan Level 2">Cave of the Moon Clan Level 2</option>
        </select>
    </div>
    <br>
    <div>
        <label for="goblin">Goblin Found</label>
        <select name="goblin" id="goblin">
            <option value="{{$sighting->goblin}} selected"> {{$sighting->goblin}} </option>
            <option value="Treasure Goblin">Treasure Goblin</option>
            <option value="Blood Thief">Blood Thief</option>
            <option value="Odious Collector">Odious Collector</option>
            <option value="Gem Hoarder">Gem Hoarder</option>
            <option value="Malevolent Tormentor">Malevolent Tormentor</option>
            <option value="Rainbow Goblin">Rainbow Goblin</option>
            <option value="Menagerist Goblin">Menagerist Goblin</option>
            <option value="Gilded Baron">Gilded Baron</option>
            <option value="Insufferable Miscreant">Insufferable Miscreant</option>
            <option value="Gelatinous Sire">Gelatinous Sire</option>
        </select>
    </div>
    <br>
    <div>
        <button>Edit Sighting # {{$sighting->id}}🧚</button>
        <button form="delete_record" style="background-color: red;">Delete Me ~ though idk why you'd delete </button>
    </div>
</form>
    <form method="POST" action="/sighting/{{$sighting->id}}/delete" id="delete_record">
        @csrf
        @method('DELETE')
    </form>
</x-main-app>
