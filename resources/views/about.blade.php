<h1>Hello Price {{$price}}, named {{$name}}</h1>

{{--Creating Clean logic--}}

<!--Comment for the html-->

@for($i=0;$i<10;$i++)

<p>{{$i}}</p>

    @if($i==5)
     "This is the 5th"
    @endif

@endfor
