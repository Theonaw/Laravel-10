@extends('base')

@section('title', 'Acceuil')

@section('content')
<h1>Bienvenue</h1>
<div>
    <h2>Actus</h2>
    <div class="flex">
        <div class="actus">
            @foreach ($actus as $actu)
                <hr>
                <span>{{ $actu->titre }}<br><br>{{ $actu->description }}<br><br>({{ $actu->date_publication }})</span>
            @endforeach
        </div>
        <br>
        <div class="slider">
            @foreach ($photoAmbiances as $photoAmbiance)
                <img src="{{asset('images/'.$photoAmbiance->fichier)}}" alt="ff" class="img">
            @endforeach
        </div>
    </div>
    <br>
</div>
@endsection