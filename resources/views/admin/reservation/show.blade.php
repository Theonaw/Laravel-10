@extends('base')

@section('title','Vos réservations')

@section('content')
    <section>
        <a href="{{ route('admin.reservation.index') }}">Retour</a>
        <h2>Admin - Réservation - Show</h2>
        <h3>Nom: {{ $reservationShow->nom }}</h3>
        <h3>Nombre de couverts: {{ $reservationShow->couvert }}</h3>
        <h3>Heure: {{ $reservationShow->heure }}</h3>
        <h3>Jour: {{ $reservationShow->jour }}</h3>
        <h3>Téléphone: {{ $reservationShow->telephone}}</h3>
        @if ($reservationShow->commentaire)
            <h2>Commentaire: {{ $reservationShow->commentaire}}</h2>
        @endif
    </section>
@endsection 