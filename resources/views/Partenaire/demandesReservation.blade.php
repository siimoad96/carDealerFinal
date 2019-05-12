@extends('layouts.partenaire')
@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <br>

                <div class="container">
                    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                        <h1>Les demandes de reservation </h1> <br>
                   
                            {{ csrf_field() }}
                        <table>
                            <tr>
                                <th>Nom du client </th>
                                <th>Note du client </th>
                                <th>Commentaire </th>
                                <th>Approuver la demande </th>
                            </tr>
                        @foreach ($demandes as $d)
                        <?php $user = App\User::find($d->client_id); ?>
                        
                        <tr>
                            <td>{{ $user->name }}</td>
                            <?php $n = App\Note::where('client_id','=',$user->id)->first(); ?>
                            <td>{{ $n->note }}</td>
                            <?php $comm = App\Comment::where('client_id','=',$user->id)->get(); ?>
                            <td>
                                    @foreach ($comm as $c)
                                        {{ $c->comment   }}
                                        <br>
                                    @endforeach
                             </td>
                        <td> <a class="btn btn-primary"  href="/Partenaire/demandeApprouve/{{$d->id}}" role="button">Approuver cette demande &raquo;</a></td>
                        </tr>
                        @endforeach  
                    </table>
                        
                  
                </div>
            </div>
        </div>
@endsection
