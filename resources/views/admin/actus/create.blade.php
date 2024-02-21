@extends('base')

@section('title','Admin - Actus - Edit')

@section('content')
<section class="reservation">
    <h2>Admin - Actus - Edit</h2>
    <a href="{{ route('admin.actus.index') }}">Retour</a>
        {{-- <div class="invalid-feedback">
            @foreach ($errors->all()as $error)
                {{$error}}
            @endforeach
        </div> --}}
        <form action="{{route('admin.actus.create')}}" method="post">
            @csrf
            <div>
                <label for="date_publication">Date_publication: </label>
                <input type="date" name="date_publication" id="date_publication" min="{{date('Y-m-d')}}" value="{{old('date_publication')}}" required>
                @error('date_publication')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="titre">Titre: </label>
                <input type="text" name="titre" id="titre" value="{{old('titre')}}" required>
                @error('titre')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="description">Description: </label>
                <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <button type="submit">Créer</button>
            </div>
        </form>
</section>
@endsection