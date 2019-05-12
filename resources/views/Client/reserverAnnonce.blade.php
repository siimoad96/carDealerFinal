@extends('layouts.client')

@section('content')

        <h1  ></h1>
        <div >
            <h3>Les informations de l'annonce choisie </h3><br><br>
                </div>
                 
            <form type="GET" action="/Client/reservationSuccess">


            {{ csrf_field() }}
                {{ method_field('get') }}

                @foreach($reservations as $reservation)
                        <input type='hidden' name='id' value='{{$reservation->id}}'>
                        <input type='hidden' name='voiture_id' value='{{$reservation->voiture_id}}'>
                @endforeach   

            <div class="form-group">
                    <label for="type">Title</label>
                        @foreach($reservations as $reservation)

                            <p>{{$reservation -> title }}</p>

                        @endforeach                                  
                    </select>               
                     </div>
                <div class="form-group">
                    <label for="type">Ville</label>
                    <select type="text" class="form-control" name = "ville">
                        @foreach($reservations as $reservation)

                            <option>{{$reservation -> city }}</option>

                        @endforeach                                  
                    </select>               
                     </div>
                
                     </div>
                <div class="form-group">
                    <label for="type">Ville</label>
                    <select type="text" class="form-control" name = "marque">
                        @foreach($voitures as $voiture)

                            <option>{{$voiture -> marque }}</option>

                        @endforeach                                  
                    </select>               
                     </div>

                     <div class="form-group">
                    <label for="type">Type</label><br>
                    
                        @foreach($voitures as $voiture)

                           {{$voiture -> type }}

                        @endforeach                                  
                               
                     </div>

                     
                     <div class="form-group">
                    <label for="type">Modele</label><br>
                    
                        @foreach($voitures as $voiture)

                           {{$voiture -> modele }}

                        @endforeach                                  
                               
                     </div>

                     
                     <div class="form-group">
                    <label for="type">Compteur</label><br>
                    
                        @foreach($voitures as $voiture)

                           {{$voiture -> compteur }}

                        @endforeach                                  
                               
                     </div>

                     
                     <div class="form-group">
                    <label for="type">Boite</label><br>
                    
                        @foreach($voitures as $voiture)

                           {{$voiture -> boite }}

                        @endforeach                                  
                               
                     </div>

                     <div class="form-group">
                    <label for="type">Carburant</label><br>
                    
                        @foreach($voitures as $voiture)

                           {{$voiture -> carburant }}

                        @endforeach                                  
                               
                     </div>

                
                <div class="form-group">
                    <label for="type">Prix</label>
                    <select type="text" class="form-control" name = "prix">
                        @foreach($reservations as $reservation)

                            <option>{{$reservation -> price }}</option>

                        @endforeach                                  
                    </select>               
                     </div>
                <div class="form-group">
                    <label for="type">De</label>
                        @foreach($reservations as $reservation)

                            <option>{{$reservation -> from }}</option>

                        @endforeach                                  
                    </select>        
                </div>
                <div class="form-group">
                    <label for="type">A</label>
                    <select type="text" class="form-control" name = "modele">
                        @foreach($reservations as $reservation)

                            <option>{{$reservation -> to }}</option>

                        @endforeach                                  
                    </select>   
                <div class="form-group">
                    <label for="date">Date</label>
                    @foreach($reservations as $reservation)

                        <option>{{$reservation -> date }}</option>

                        @endforeach                 
                         </div>
                <br> <br>
                   
                <div class="form-group">
                    <label for="date">Note</label>
                    @foreach($notes as $note)

                        <option>{{$note -> note }}</option>

                        @endforeach                 
                         </div>
                <br> <br>

                   
                <div class="form-group">
                    <label for="date">Commentaires Positives</label>
                    @foreach($comments as $comment)

                        <option>{{$comment -> comment_positive }}</option>

                        @endforeach                 
                         </div>
                         
                <br> <br>
                <div class="form-group">
                    <label for="date">Commentaires Negatives</label>
                    @foreach($comments as $comment)

                        <option>{{$comment -> comment_negative }}</option>

                        @endforeach                 
                         </div>

                <br> <br>
                <button type="submit" class="btn btn-lg btn-info" >Reserver</button>
                
               
                </form>
            
        </div>
        
@endsection