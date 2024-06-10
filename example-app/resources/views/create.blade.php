@extends('layouts.app')

@section('content')
    <h1>Fiche nouveau Stagiaire:</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom"> Nom:</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom"> Prénom:</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age"> Âge:</label>
            <input type="number" name="age" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email"> mail:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password"> mot de passe:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
