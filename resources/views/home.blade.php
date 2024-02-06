@extends('base')

@section('title', 'Acceuil')

@section('content')
<h1>Hello Laravel</h1>

<ul class="ambiance">
    @foreach ($photoAmbiances as $photoAmbiance)
    <li>
        <img src="{{asset('images/'.$photoAmbiance->fichier)}}" alt="ff">
        <p>{{$photoAmbiance->description}}</p>
    </li>
    @endforeach
<ul>

<ul>
    @foreach ($actus as $actu)
        <li>{{ $actu->contenu }} ({{ $actu->date_publication }})</li>
    @endforeach
</ul>

@endsection


