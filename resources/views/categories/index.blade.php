<!-- resources/views/artworks/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des œuvres d'art</h1>
    <a href="{{ route('artworks.create') }}" class="btn btn-primary mb-3">Ajouter une œuvre</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Artiste</th>
                <th>Année</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artworks as $artwork)
                <tr>
                    <td>{{ $artwork->title }}</td>
                    <td>{{ $artwork->artist }}</td>
                    <td>{{ $artwork->year }}</td>
                    <td>{{ $artwork->category->name }}</td>
                    <td>
                        <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('artworks.destroy', $artwork->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
