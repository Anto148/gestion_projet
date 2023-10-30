@extends('base')

@section('title', 'GESTION DE PROJET')

@section('content')

{{-- @dd($projets); --}}

<table class="table table-striped">
    <thead>
        <tr>

            <th class="px-4 py-2">Titre</th>
            
            <th class="px-4 py-2">Surface</th>

            <th class="px-4 py-2">Prix</th>

            <th class="px-4 py-2">Ville</th>

            <th class="px-4 py-2">Actions</th>

        </tr>
    </thead>
    {{-- <tbody>
        {{-- @foreach ($projets as $projet) --}}


            {{-- <tr class="bg-gray-100"> --}}

                {{-- <td class="border px-4 py-2">{{ $projet->nom }}</td> --}}

                {{-- <td class="border px-4 py-2">{{ $projet->date_debut }}</td> --}}

                {{-- <td class="border px-4 py-2">{{ $projet->date_fin }}</td> --}}

                {{-- <td class="border px-4 py-2">{{ $projet->status }}</td> --}}

            {{-- </tr> --}}
            
        {{-- @endforeach --}}
    {{-- </tbody> --}} 
</table>

{{-- {{ $projets->links() }} --}}
    

<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <a href="{{route('projets.index')}}">Créer un nouveau projet</a>
</button>
    
@endsection
