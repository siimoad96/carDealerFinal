@extends('layouts.client')

@section('content')
@foreach($annonces as $annonce)

        <h1  >Infos de la voiture :</h1>
{{$annonce->id}} {{$annonce->title}} {{$annonce->city}} {{$annonce->price}} {{$annonce->date}} <br>
       <form action="/annonce/{{$annonce->id}}" method="post">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <INPUT TYPE="hidden" VALUE="{{$annonce->id}}">

       <INPUT TYPE="submit"  VALUE="Reserver maintenant">
       </form>
       <br><br><br>
       @endforeach

@endsection