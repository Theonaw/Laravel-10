@extends('base')

@section('title','Admin - Réservation - Edit')

@section('content')
        <h2>Admin - Réservation - Edit</h2>
            {{-- <div class="invalid-feedback">
                @foreach ($errors->all()as $error)
                    {{$error}}
                @endforeach
            </div> --}}
            <form action="{{route('admin.reservation.update',['id' => $reservation->id])}}" method="post">
                @csrf
                <div>
                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" id="nom" min="3" max="50" value="{{old('nom', $reservation->nom)}}" required>
                    @error('nom')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="couvert">Couverts: </label>
                    <input type="text" name="couvert" id="couvert" min="1" max="16" value="{{old('couvert', $reservation->couvert)}}" required>
                    @error('couvert')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="heure">Heure: </label>
                    <select name="heure" id="heure" required>
                        <option value=""></option>
                        @foreach ($heures as $heure)
                            <option value="{{$heure}}" {{old('heure', $reservation->heure) == $heure.':00' ? 'selected':''}}>
                            {{$heure}}</option>
                        @endforeach
                    </select>
                    @error('heure')
                    <div>{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="jour">Jour: </label>
                    <input type="date" name="jour" id="jour" min="{{date('Y-m-d')}}" value="{{old('jour',$reservation->jour)}}" required>
                    @error('jour')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="telephone">Téléphone: </label>
                    <input type="phone" name="telephone" id="telephone" value="{{old('telephone', $reservation->telephone)}}" placeholder="Ex: 0612345678" required>
                    @error('telephone')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="commentaire">Commentaires: </label>
                    <textarea name="commentaire" id="commentaire" cols="30" rows="10">{{old('commentaire', $reservation->commentaire)}}</textarea>
                    @error('commentaire')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit">Modifier</button>
                </div>
            </form>
@endsection