@extends('layouts.client')

@section('content')
@foreach($annonces as $annonce)

        <div class="container" align="center">
        <h1  >Infos de la voiture :</h1>
        <br> <br>
        <h2> {{$annonce->title}} </h2>
        <h3> Ville :{{$annonce->city}} </h3>
        <h3>Prix: {{$annonce->price}} </h3>
        <h3>Date : {{$annonce->date}} </h3><br>

        <form type="POST" action="/Client/reserverAnnonce" >

            {{ csrf_field() }}
            {{ method_field('get')}}

       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <INPUT TYPE="hidden" name='id' VALUE="{{$annonce->id}}">
<br>
       <INPUT TYPE="submit" class="btn btn-info"  VALUE="Consulter">
       </form>
       <br><br><br>
       </div>
       @endforeach

@endsection