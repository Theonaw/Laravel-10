@extends('base')

@section('title','Vos réservations')

@section('content')
<section>
    <H2>Vos Réservations</H2>
    @foreach ($reservations as $reservation)
        <div>
            <a href="{{ route('admin.reservation.show',['id' => $reservation->id])}}"><h4>{{ $reservation->nom }}</h4></a>
        </div>
    @endforeach
</section>
@endsection