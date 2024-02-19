@extends('base')

@section('title', 'Acceuil')

@section('content')
<h1>Bienvenue</h1>

<ul class="ambiance">
    <div class="slider-1">
    <div class="slider">
    @foreach ($photoAmbiances as $photoAmbiance)
        <img src="{{asset('images/'.$photoAmbiance->fichier)}}" alt="ff" class="img">
    @endforeach
</div>
</div>
<ul>
<br>
<ul class="actus">
    @foreach ($actus as $actu)
        <li>{{ $actu->titre }}<br><br>{{ $actu->description }}<br><br>({{ $actu->date_publication }})</li>
        <br>
    @endforeach
</ul>

@endsection