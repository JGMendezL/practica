@extends('layout')
@section('content')

<section class="w-[80%]  flex items-center justify-center flex-wrap ">
    <div class="flex text-white gap-10 w-full">
        <img class="h-[400px] w-[400px]" src={{ $team->image ?  asset('storage/'.$team->image) : asset('/images/no-image.jpg')}} alt={{"Imagen de" . $team->name}}>
       <div class="flex flex-col gap-20 w-[60%] h-full relative">
            <h1 class="text-5xl">{{$team->name}}</h1>
            <p class="text-justify ">{{$team->description}}</p>  
            <h2 class="font-bold">{{$team->city}}</h2>
            @auth
                @if (auth()->id() == $team->user_id)
                    <div class="absolute top-0 right-0 flex gap-3 text-xl">
                        <a class="text-purple-900" href="{{'/teams/edit/'. $team->id}}">Editar</a>
            
                        <form action="/teams/{{$team->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="text-red-700"  id="delete-button">Eliminar</button>
                        </form>
                    </div> 
                    
                @endif
            @endauth
        </div> 
    </div>   
</section>

@endsection