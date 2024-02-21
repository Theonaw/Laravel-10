@extends('base')

@section('title','Vos réservations')

@section('content')
    <section>
        <a href="{{ route('admin.reservation.index') }}">Retour</a>
        <h2>Admin - Actu - Show</h2>
        <h3>Nom: {{ $actusShow->date_publication}}</h3>
        <h3>Nombre de couverts: {{ $reservationShow->titre }}</h3>
        <h3>Heure: {{ $actusShow->description }}</h3>
    </section>
@endsection 