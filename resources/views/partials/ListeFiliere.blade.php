@extends('layouts.masters')
@section('main')
    <h1>Liste Des Etudiants</h1>
    <table class="table tabel-light">
    <thead>
        <tr>
            <th>ID Filiere</th>
            <th>Libelle Filiere</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($filieres as $filiere)
            <tr>
                <td>{{$filiere->id_filiere}}</td>
                <td>{{$filiere->libelle}}</td>
                <td>
                    <a href="#" class="btn btn-warning">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection