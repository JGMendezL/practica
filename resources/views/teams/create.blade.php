@extends('layout')
@section('content')

<section class="w-[80%] h-full flex flex-col items-center justify-center ">

   <h1 class="text-white text-3xl h-[100px] ">Crea un equipo</h1> 

    <form action="/teams" method="POST" class="flex flex-col items-center gap-5" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <label for="name" class="text-white">Nombre</label>
            <input type="text" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="name" value={{old('name')}} >
            @error('name')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="city" class="text-white">Ciudad</label>
            <input type="text"  class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" name="city" value={{old('city')}}  >
            @error('city')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-white">Descripción</label>
            <textarea name="description" class="text-white rounded-2xl w-[400px] px-2 py-3 bg-transparent border border-white" value={{old('description')}}>
            </textarea>
            @error('description')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-white">Logo del equipo</label>
            <input type="file" name="image" class="text-white py-2 w-[400px] px-2 rounded-2xl  bg-transparent border border-white" value={{old('image')}} >
            @error('image')
                <small class="text-red-700">{{$message}}</small> 
            @enderror
        </div>
        <button class="border-[3px] border-blue-950 rounded-lg text-white py-2 w-[150px] px-2 bg-transparent hover:bg-blue-950 hover:text-white transition-colors">Crear</button>

    </form>

</section>
@endsection