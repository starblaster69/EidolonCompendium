@extends('layout.web')

@section('pageTitle', 'Playbooks')

@section('content')
<div>
    <h1>Create New Playbook</h1>
    <p>NOTE: as this are game features, this normally is only used when new official material is released. Content entered here is visible to every user on the site. Move With Caution.</p>
</div>

<div>
    <form action="{{route('playbooks.store')}}" method="POST">
        <label for="editionInput">Game Edition</label>
        <select id="editionInput" name="edition">
            <option value="1">1st Edition</option>
            <option value="2">2nd Edition</option>
        </select><br>

        <label for="playbookName">Playbook Name</label>
        <input type="text" id="playbookName" name="playbookName"><br>

        <label for="abilityPhrase">ability phrase</label>
        <input type="text" id="abilityPhrase" name="abilityPhrase">
        <span>use an * to signify a blank space</span><br>

        <label for="resonantEffect">Resonant Effect</label>
        <textarea id="resonantEffect" name="resonantEffect"></textarea><br>

        <label for="dissonantEffect">Dissonant Effect</label>
        <textarea id="dissonantEffect" name="dissonantEffect"></textarea><br>

        <fieldset>
            <legend>Default Stats</legend>
            <span>the stat minimum for 2nd edition playbooks is 1</span><br>
            @foreach($stats as $stat)
                <label for="{{$stat}}">{{$stat}}</label>
                <input type="number" id="{{$stat}}" name="{{$stat}}" max="3" min="-1"><br>
            @endforeach
        </fieldset>

        <button type="submit">Save</button>
    </form>
</div>

@endsection
