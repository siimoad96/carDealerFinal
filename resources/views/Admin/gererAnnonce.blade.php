@include('layouts.admin')

<div class="container">
        
            <br> <br> <br>
     
        
                
            <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>City</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Partenaire</th>
                        <th>Voiture</th>
                        <th>Status</th>

        
                    </tr>
                    @foreach ($annonces as $annonce)
                    <tr>
                        <td>{{ $annonce->id }}</td>
                        <td>{{ $annonce->title }}</td>
                        <td>{{ $annonce->city }}</td>
                        <td>{{ $annonce->price }}</td>
                        <td>{{ $annonce->date }}</td>
                        <td>{{ $annonce->from }}</td>
                        <td>{{ $annonce->to }}</td>
                        <td>{{ $annonce->u_name }} </td>
                        <td>{{ $annonce->v_marque }}</td>
                        <td> <?php if( $annonce->privilege == 0)
                                echo "Non reservee";
                                elseif ( $annonce->privilege == 1) 
                                echo "Demandé au reservation";
                                
                                else 
                                    echo "Reservee";
                                ?>
                         </td>
       <td><a href="{{ URL::action('AnnoncesController@editAnnonce', $annonce->id) }}" class="button">Modifier</a></td>
       <td><a href="{{ URL::action('AnnoncesController@deleteAnnonce', $annonce->id) }}" class="button">Supprimer</a></td>                                      


                    </tr>
                    @endforeach
                    </table>
                  
                
        </table>

   </div>
        