@extends('base')

@section('title','Vos réservations')

@section('content')
    <section>
        <h2>Nom: {{ $reservationShow->nom }}</h2>
        <h2>Nombre de couverts: {{ $reservationShow->couvert }}</h2>
        <h2>Heure: {{ $reservationShow->heure }}</h2>
        <h2>Jour: {{ $reservationShow->jour }}</h2>
        <h2>Téléphone: {{ $reservationShow->telephone}}</h2>
        
    </section>
@endsection