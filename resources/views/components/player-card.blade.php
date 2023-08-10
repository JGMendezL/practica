@props(['player'])
<div class="flex flex-col items-center justify-center shadow-lg p-5 hover:scale-110 transition  w-[400px] text-white">
    @if( isset($player['image']))
        <img src="{{$player['image']}}" alt="">
    @else
        <img src="{{asset('images/no-image-player.png')}}" class="h-[300px]" alt="">    
    @endif
    <h2 class="text-2xl text-green-800">{{$player['first_name'] . ' ' .  $player['last_name']}} </h2>
    <table>
        <tbody>
            <tr>
                <h2>Posición: {{$player['position']}}</h2>
                <h2>Equipo: {{$player['team']['full_name']}}</h2>
            </tr>
        </tbody>
    </table>


</div>
