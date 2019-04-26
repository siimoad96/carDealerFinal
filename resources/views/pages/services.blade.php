@extends('layouts.appp')

@section('content')
    <h1>{{$title}}</h1>
<br><br><br>
    @if (count($services)>0)
        <ul class="list-group">
            @foreach($services as $service)
                <li align="center" class="list-group-item"> {{$service}} </li>
            @endforeach
        </ul>
    @endif

@endsection
