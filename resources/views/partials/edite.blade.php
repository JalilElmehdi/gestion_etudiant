@extends('layouts.masters')
<style>
    /* Styles spécifiques au formulaire */
    .custom-form {
        max-width: 400px;
        margin: auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
@section('main')
<div class="container mt-5">
    <div class="custom-form">
        <h2 class="text-center mb-4">Inscription</h2>
        <form action="{{route('updateE',['etudiant'=>$etudiant->id])}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiant->nom}}">
            </div>
            <div class="form-group">
                <label for="sexe">Sexe :</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexe" id="sexe_homme" value="homme" {{$etudiant->sexe==="homme"? "checked":"" }}>
                    <label class="form-check-label" for="sexe_homme">Homme</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexe" id="sexe_femme" value="femme" {{$etudiant->sexe==="femme"? "checked":"" }}>
                    <label class="form-check-label" for="sexe_femme">Femme</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$etudiant->email}}">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group">
                <label for="password">ID FILIERE :</label>
                <input type="text" class="form-control" id="password" name="id_filiere" value="{{$etudiant->id_filiere}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
    </div>
</div>

@endsection