@extends('layouts.client')

@section('content')

        <h1 >{{$title}}</h1>
        <div>
            <br> <br> <br>
     
        </div>

        <table class="table table-striped">
                  <tr>
                    <td>Nom</td>
                    <td> </td>
                  </tr>
                  <tr>
                    <td>Prénom</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Tél</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Ville</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mot de passe</td>
                    <td></td>
                    </tr>
                </tbody>
        </table>

        <a href="modifierprofil" class="btn btn-lg btn-info"> Modifier </a>

            
        


@endsection