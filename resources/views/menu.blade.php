@extends('base')

@section('title', 'Menu')

@section('content')
    <h1>Menu</h1>
    <section>
    
    @foreach ($categories as $categorie)
    <hr>
    <div>
        <h3>{{ $categorie->nom }}</h3>
        <ul class="plats">
            @foreach ($categorie->plats() as $plat)
            <li>
                <a href="{{ route('main.plat',['id' => $plat->id])}}"><img src="{{ asset('images/'.$plat->fichier)}}" alt="{{$plat->nom}}"></a>
                <a href="{{ route('main.plat',['id' => $plat->id])}}"><h4>{{ $plat->nom }}</h4></a>
                <span class="prix">{{$plat->prix}} eur</span>
                <ul>
                    @foreach ($plat->etiquettes() as $etiquette)
                        <li>{{$etiquette->nom}}</li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
    @endforeach
    </section>
@endsection
