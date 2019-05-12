@extends('layouts.client')

@section('content')

            {{ csrf_field() }}
            {{ method_field('get')}}

       <p> Votre demande a ete envoyer avec success !!</p>

@endsection