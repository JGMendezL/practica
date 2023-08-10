@extends('layout')
@section('content')
    
    <section class="w-[80%] h-full flex flex-col items-center justify-center ">

        <h2 class="text-white text-5xl h-[100px] ">Tus equipos</h1> 

        <div class="flex flex-col w-full h-full items-center justify-center">

            @unless ($teams->isEmpty())
                @foreach ($teams as $team)

                    <x-manage-team-card :team="$team"/> 
                    <hr>  
                    
                @endforeach
                @else 
                <div class="h-[300px] flex flex-col items-center justify-center gap-5">
                    <p class="text-white font-bold text-3xl text-center">Aún no has creado ningún equipo</p>

                    <a href="/teams/create" class="text-white hover:text-purple-900 transition-colors cursor-pointer border-b-2 hover:border-b-purple-900 ">Crea un equipo</a>

                </div>
                    
            @endunless
            
           
        </div> 

    </section>
@endsection