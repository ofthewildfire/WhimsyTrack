

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @fonts

    <!-- Styles -->
    <style>
        a:hover {
            text-docoration: underline 2px orange;
        }
    </style>
</head>
<body style="background-color: black; color: pink; padding: 5em;">
<x-header-app />
<h1>Add a sighting</h1>
<form action="/add" method='post'>
    @csrf
    <div>
        <label for="location">Location</label>
        <select name="location" id="location">
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
        <button>Add Sighting 🧚</button>
    </div>
</form>

</body>
</html>

