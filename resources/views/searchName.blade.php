@foreach ($city1 as $cites)

 <div class="e10" onclick="window.location='/{{$cites->city}}'">
  {{$cites->city}}

</div>


@endforeach
