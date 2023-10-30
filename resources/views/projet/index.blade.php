@extends('base')
@section('title', 'FORMULAIRE DE CREATION DE PROJET')

@section('content')
<div class="container">
    <h2>Remplissez le formulaire suivant:</h2>
    <form method="POST" action="{{ route('projets.store') }}" class="w-full max-w-lg">
        @csrf
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label for="nom">Nom du projet :</label>
            <input type="text" name="nom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  id="nom" placeholder="Nom du projet">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label for="date_debut">Date de début :</label>
            <input type="date" name="date_debut" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  id="date_debut">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label for="date_fin">Date de fin :</label>
            <input type="date" name="date_fin" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  id="date_fin">
        </div><br>
        {{-- <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label for="status">Statut :</label> --}}
            {{-- <span id="status">{{ $status }}</span>  --}}
        {{-- </div> --}}
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
           Créer le projet
        </button>
    </form>
</div>
@endsection

    
