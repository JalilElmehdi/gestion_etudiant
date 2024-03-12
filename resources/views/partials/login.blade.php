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
        <h2 class="text-center mb-4">SignIn</h2>
        <form action="{{route('validerlogin')}}" method="post">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Entrez votre email">
                @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
            </div>
            @error('errorlogin')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>

@endsection