@extends('base')

@section('title','Vos actus')

@section('content')
<section>
    <H2>Vos Actus</H2>
    <a href="{{route('admin.actus.create')}}">Créer une Actu</a>
    <table>
        <tr>
            <th>id</th>
            <th>date_publication</th>
            <th>titre</th>
            <th>description</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </tr>
    @foreach ($actus as $actu)
        <tr>
            <td>{{$actu->id}}</td>
            <td>{{$actu->date_publication}}</td>
            <td>{{$actu->titre}}</td>
            <td>{{$actu->description}}</td>
            <td>{{$actu->created_at}}</td>
            <td>{{$actu->updated_at}}</td>
            <td>
                <a href="{{ route('admin.actus.edit',['id' => $actu->id])}}">Modifier</a>
                <a href="{{ route('admin.actus.show',['id' => $actu->id])}}">Voir</a>
                <form action="{{route('admin.actus.delete',['id' => $actu->id])}}" method="post" onsubmit="return confirm('Supprimer cet élément ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</section>
@endsection