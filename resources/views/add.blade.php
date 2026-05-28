<h1>Add a sighting</h1>
<form action="/add" method='post'>
    @csrf
    <div>
        <label for="location">Location</label>
        <select name="location" id="location">
            <option value="cathedral_level_1">Cathedral Level 1</option>
            <option value="cathedral_level_2">Cathedral Level 2</option>
            <option value="cathedral_level_3">Cathedral Level 3</option>
            <option value="leorics_passage">Leoric's Passage</option>
            <option value="leorics_hunting_grounds">Leoric's hunting grounds</option>
            <option value="northern_highlands">Northern Highlands</option>
            <option value="royal_crypts">Royal Crypts</option>
            <option value="southern_highlands">Southern Highlands</option>
            <option value="cave_of_the_moon_clan">Cave of the Moon Clan Level 1 and 2</option>
        </select>
    </div>
    <br>
    <div>
        <label for="goblin">Goblin Found</label>
        <select name="goblin" id="goblin">
            <option value="treasure">Treasure Goblin</option>
            <option value="blood">Blood Thief</option>
            <option value="odious">Odious Collector</option>
            <option value="gem">Gem Hoarder</option>
            <option value="malevolent">Malevolent Tormentor</option>
            <option value="rainbow">Rainbow Goblin</option>
            <option value="menagerist">Menagerist Goblin</option>
            <option value="gilded">Gilded Baron</option>
            <option value="insufferable">Insufferable Miscreant</option>
            <option value="gelatinous">Gelatinous Sire</option>
        </select>
    </div>
    <br>
    <div>
        <button>Add sighting xd</button>
    </div>
</form>
