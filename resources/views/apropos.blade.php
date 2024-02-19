@extends('base')

@section('title', 'A Propos')

@section('content')
<h1>A Propos</h1>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9170590857707!2d3.0686003765979786!3d50.6286575716268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1708343333810!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<div class="bgc-w c1">
<h3 class="Ap-Ocnamo">Ocnamo</h3>
<p>adresse : 5 Bd Louis XIV, 59800 Lille</p>
<p class="Ap-tel">télephone : 01 23 45 67 89</p>
</div>
<h2>Ouvert du lundi au vendredi de :</h2>
<table>
    <tr>
        <th>
            Lundi
        </th>
        <th>
            Mardi
        </th>
        <th>
            Mercredi
        </th>
        <th>
            Jeudi
        </th>
        <th>
            Vendredi
        </th>
    </tr>
    
    <tr><td>12:00</td><td>12:00</td><td>12:00</td><td>12:00</td><td>12:00</td>
    <tr><td>12:30</td><td>12:30</td><td>12:30</td><td>12:30</td><td>12:30</td>
    <tr><td>13:00</td><td>13:00</td><td>13:00</td><td>13:00</td><td>13:00</td>
    <tr><td>13:30</td><td>13:30</td><td>13:30</td><td>13:30</td><td>13:30</td>
    <tr><td>20:00</td><td>20:00</td><td>20:00</td><td>20:00</td><td>20:00</td>
    <tr><td>20:30</td><td>20:30</td><td>20:30</td><td>20:30</td><td>20:30</td>
    <tr><td>21:00</td><td>21:00</td><td>21:00</td><td>21:00</td><td>21:00</td>
    <tr><td>21:30</td><td>21:30</td><td>21:30</td><td>21:30</td><td>21:30</td>
    </table>

    <h1><a href="{{ route('main.reservation') }}">Réservation</a></h1>
@endsection
