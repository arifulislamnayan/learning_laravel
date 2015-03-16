@extends ('master')


@section('content')

<h1>{{ $name }}</h1>

@foreach ($songs as $index=> $song)
<ul><a href="pages/{{ $index }}" > {{ $song }} </a> </ul>
@endforeach

@stop


