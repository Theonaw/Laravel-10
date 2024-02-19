@extends('base')

@section('title', 'Acceuil')

@section('content')
<h1>Bienvenue</h1>

<ul class="ambiance">
    @foreach ($photoAmbiances as $photoAmbiance)
        <img src="{{asset('images/'.$photoAmbiance->fichier)}}" alt="ff" class="img">
    @endforeach
<ul>

<ul>
    @foreach ($actus as $actu)
        <li>{{ $actu->titre }}<br><br>{{ $actu->description }}<br><br>({{ $actu->date_publication }})</li>
    @endforeach
</ul>

@endsection