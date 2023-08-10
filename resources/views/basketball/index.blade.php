@extends('layout')
@section('content')

    <header class="flex flex-col items-center justify-center p-5 gap-5 text-white">
        <h2 class="text-5xl font-bold text-center w-[80%]">    
            Basketball
        </h2>
        <p>Conoce los jugadores más populares del momento</p>
        <img src={{asset('images/basketball-image.svg')}} alt="Landing Image" class="w-[40%] h-[60%] ">
    </header>
    <section class="flex justify-center flex-wrap gap-10">
        @foreach ($players as $player)
            <x-player-card :player='$player' />
            
        @endforeach

    </section>
</section>
@endsection()