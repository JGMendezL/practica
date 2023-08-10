@props(['team'])
<a href="/teams/{{$team->id}}">
    <div class="h-[400px] w-[300px] flex flex-col text-zinc-50 items-center hover:scale-90 transition-all hover:shadow-white hover:shadow-lg">
        <img  class="h-[300px] w-full object-cover object-center" src={{$team->image ?  asset('storage/'  . $team->image) : asset('images/no-image.jpg')}} alt={{$team->name}}/>
        <p class="font-extrabold" >{{$team->name}}</p>
        <p>{{$team->city}}</p> 
    </div>
</a>
