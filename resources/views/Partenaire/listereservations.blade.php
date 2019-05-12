@extends('layouts.partenaire')
@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <br>

                <div class="container">
                        <h1>Les annonces ayant une demande de réservation:</h1> <br>
                           
                        <h3>Les annonces qui ont des demandes de réservations</h3>
                        <table>
                            <tr>
                                <th>Titre </th>
                                <th>La ville </th>
                                <th>Le prix</th>
                                <th>La date</th>
                                <th>Les demandes de réservation </th>
                            </tr>
                        @foreach ($annonces as $a)
                        <tr>
                            <td>{{ $a->title }}</td>
                            <td>{{ $a->city }}</td>
                            <td> {{ $a->price }} </td>
                             <td> {{ $a->date  }} </td>
                        <td> <a class="btn btn-primary"  href="/Partenaire/demandesReservation/{{$a->id}}" role="button">Voir&raquo;</a>
                         </td>
                        </tr>
                        @endforeach  
                    </table>
                    
                </div>
            </div>
        </div>
@endsection
