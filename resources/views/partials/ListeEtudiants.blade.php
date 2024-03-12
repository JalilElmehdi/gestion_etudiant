@extends('layouts.masters')
<style>
    .td{
        display: flex;
        justify-content: left;
        align-items: center;
        
    }
    .td form{
        margin-right: 3px;
    }
</style>
@section('main')
    <h1>Liste Des Etudiants</h1>
    <table class="table tabel-light">
    <thead>
        <tr>
            <th>ID ETUDIANTS</th>
            <th>NOM</th>
            <th>SEXE</th>
            <th>EMAIL</th>
            <th>ID FILIERE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{$etudiant->id}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->sexe}}</td>
                <td>{{$etudiant->email}}</td>
                <td>{{$etudiant->id_filiere}}</td>
                <td class="td">
                    <form action="{{route('deleteE',['etudiant'=>$etudiant->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>

                    <form action="{{route('editeE',['etudiant'=>$etudiant->id])}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-success">Modifier</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection