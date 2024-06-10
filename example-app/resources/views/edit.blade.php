@extends('layouts.app')

@section('content')
    <h1>Modifier Stagiaire:</h1>
    <form action="{{ route('update', $stagiaire->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" class="form-control" value="{{ $stagiaire->nom }}" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" class="form-control" value="{{ $stagiaire->prenom }}" required>
        </div>
        <div class="form-group">
            <label for="age">Âge:</label>
            <input type="number" name="age" class="form-control" value="{{ $stagiaire->age }}" required>
        </div>
        <div class="form-group">
            <label for="email">Mail:</label>
            <input type="email" name="email" class="form-control" value="{{ $stagiaire->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
