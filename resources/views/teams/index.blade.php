@extends('layout')
@section('content')
<h1 class="text-4xl text-white  font-mono">Equipos de futbol</h1>
@if((count($teams)>0))
    @include('partials/_searcher')
@endif


<section class="w-[80%] flex flex-col items-center justify-center gap-10 relative z-10">
    
    @if((count($teams)==0))
    <div class="flex flex-col items-center h-[80%] p-20 gap-4">
        <img src="images/empty-image.svg" alt="Empty">
        <p class="text-white text-3xl">No hay equipos disponibles</p>

    </div>

    @endif
    <div class="flex gap-5 flex-wrap justify-evenly z-10">
        @foreach ($teams as $team)
            <x-team-card :team="$team" />
        @endforeach
    </div>
    <div class="w-full">
        {{$teams->links()}}
    </div>

</section>
@endsection