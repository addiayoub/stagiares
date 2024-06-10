@extends('layouts.app')

@section('content')
    <div class="text-center mt-3">
        <h1 style="color: green;">Gestion des stagiaires</h1>
    </div>
     <br/>
     <br/>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn btn-success mr-2" href="{{ route('index') }}">Lister Tous</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary mr-2" href="{{ route('create') }}">Ajouter</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('delete') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer tous les stagiaires ?')">Supprimer Tous</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="{{ route('search') }}" method="GET" class="form-inline">
                        <input type="text" name="search" class="form-control mr-2" placeholder="Rechercher...">
                        <button type="submit" class="btn btn-success">Rechercher</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
    <h2 class="text-left">Liste des stagiaires</h2>
    <br/>
    <div class="table-responsive">
        <table class="table-dark table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Âge</th>
                    <th>Opérations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stagiaires as $stagiaire)
                <tr>
                    <td>{{ $stagiaire->id }}</td>
                    <td>{{ $stagiaire->nom }}</td>
                    <td>{{ $stagiaire->prenom }}</td>
                    <td>{{ $stagiaire->age }}</td>
                    <td>
                        <a href="{{ route('edit', $stagiaire->id) }}" class="btn btn-outline-warning">Modifier</a>
                        <form action="{{ route('destroy', $stagiaire->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
