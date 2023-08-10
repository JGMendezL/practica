@extends('layout')
@section('content')

<section class="w-[80%] h-full flex flex-col items-center justify-center ">

   <h1 class="text-white text-3xl h-[100px] ">Edición de equipo</h1> 

    <form action="/teams/{{$team->id}}" method="POST" class="flex flex-col items-center gap-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label for="name" class="text-white">Nombre</label>
            <input type="text" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="name" value={{$team->name}} >
            @error('name')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="city" class="text-white">Ciudad</label>
            <input type="text"class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="city" value={{$team->city}}  >
            @error('city')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-white">Descripción</label>
            <textarea name="description" class="text-white rounded-2xl w-[400px] px-2 py-3 bg-transparent border border-white">{{$team->description}}</textarea>
            @error('description')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col items-center gap-5">
            <label for="name" class="text-white">Logo del equipo</label>
            <img  class="h-[300px] w-[300px] object-cover object-center" src={{$team->image ?  asset('storage/'  . $team->image) : asset('images/no-image.jpg')}} alt={{$team->name}}/>

            <input type="file" name="image" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" >
            @error('image')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <button 
        class="border-[3px] border-blue-950 rounded-lg text-white py-2 w-[150px] px-2 bg-transparent hover:bg-blue-950 hover:text-white transition-colors">
            Editar  
        </button>

    </form>

</section>
@endsection