@include('layouts.admin')

    
<div class="container">
        
            <br> <br> <br>
     
        
                
            <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Nom Complet</th>
                        <th>Email</th>
                        <th>Ville</th>
                        <th>Tél</th>
                        <th>Modifier Partenaire</th>
                        <th>Supprimer Partenaire</th>
        
                    </tr>
                    @foreach ($partenaires as $partenaire)
                    <tr>
                        <td>{{ $partenaire->id }}</td>
                        <td>{{ $partenaire->name }}</td>
                        <td>{{ $partenaire->email }}</td>
                        <td>{{ $partenaire->city }}</td>
                        <td>{{ $partenaire->tel }}</td>
                        <td>Modifier</td>
                        <td>Supprimer</td>


                    </tr>
                    @endforeach
                    </table>
                  
                
        </table>

   </div>

