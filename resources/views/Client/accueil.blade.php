<style>

		.panel-body{
			margin-top: 50px;
		}

		a.slide-image{
		  height: 150px;
		} ;
	
		
			body {font-family: Arial, Helvetica, sans-serif; }
			form {border: 3px solid #f1f1f1; padding:1.5em; background-color:whitesmoke ; color:black; font-size:1.1em;}
			
			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}
		
			span.psw {
			  float: right;
			  padding-top: 16px;
			}
			
			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
				 display: block;
				 float: none;
			  }
			  .cancelbtn {
				 width: 100%;
			  }
			}
			
	  </style>

@extends('layouts.client')

   
@section('content')
<br> 
<div class="">

    <div class="row">

        <div class="col-md-4">
            <br> <br> <br>
                  
        
        <form type="POST" action="/Client/rechercheDate">

            {{ csrf_field() }}
                {{ method_field('get') }}

                <div class="form-group">
                    <label for="type">Date</label>
                    <input id='date' type="text" name="date" class="form-control" placeholder="Entrer la date" required=required>
                </div>
                
                <div class="form-group">

                        @foreach($annonces as $annonce)
                            <input type="hidden" class="form-control" name="id" value='{{$annonce->id}}'>
                            <input type="hidden" class="form-control" name="voiture_id" value='{{$annonce->voiture_id}}'>
                        @endforeach    

                    <label for="type">Ville</label>
                <select type="text" class="form-control" name = "ville" required=required>
                        <option selected=true disabled selected value>Selectionner une ville</option>
                        <option   value='Agadir'>Agadir</option>
                        <option   value='Asilah'>Asilah</option>
                        <option   value='Arfoud'>Arfoud</option>
                        <option   value='Beni Mellal'>Beni Mellal</option>
                        <option   value='Berkane'>Berkane</option>
                        <option   value='Berrechid'>Berrechid</option>
                        <option   value='Boujdour'>Boujdour</option>
                        <option   value='Casablanca'>Casablanca</option>
                        <option   value='Chefchaouen'>Chefchaouen</option>
                        <option   value='Dakhla'>Dakhla</option>
                        <option   value='El aioun'>El Aioun </option>
                        <option   value='El jadida'>El Jadida </option>
                        <option   value='Errachidia'>Errachidia </option>
                        <option   value='Essaouira'>Essaouira</option>
                        <option   value='Fes'>Fès</option>
                        <option   value='Fnideq'>Fnideq</option>
                        <option   value='Guelmim'>Guelmim</option>
                        <option   value='Guelmima'>Guelmima</option>
                        <option   value='Guercif'>Guercif</option>
                        <option   value='Ifrane'>Ifrane</option>
                        <option   value='Kenitra'>Kénitra</option>
                        <option   value='Khenifra'>Khénifra</option>
                        <option   value='Khouribga'>Khouribga</option>
                        <option   value='Ksar El Kebir'>Ksar el Kebir </option>
                        <option   value='Laayoune'>Laâyoune</option>
                        <option   value='Lagouira '>Lagouira </option>
                        <option   value='Larache'>Larache</option>
                        <option   value='Marrakech'>Marrakech</option>
                        <option   value='Martil'>Martil</option>
                        <option   value='Meknes'>Meknès</option>
                        <option   value='Mohammedia'>Mohammédia</option>
                        <option   value='Nador'>Nador</option>
                        <option   value='Ouarzazate'>Ouarzazate</option>
                        <option   value='Ouezzane'>Ouezzane</option>
                        <option   value='Oujda'>Oujda</option>
                        <option   value='Rabat'>Rabat</option>
                        <option   value='Oujda'>Oujda</option>
                        <option   value='Safi'>Safi</option>
                        <option   value='Sale'>Salé</option>
                        <option   value='Tanger'>Tanger</option>
                        <option   value='Tetouan'>Tétouan</option>
                    </select>
                     </div>
                
                <div>
                    <button type="submit" class="btn btn-lg btn-info" >Rechercher</button>
                </div>
            </form>  
     
        </div>
        
        <div class="col-md-8">

            <div class="row carousel-holder">

                @forelse($annonces as $annonce)

                <div class="panel-body">
					<div class="row">
						<div class="col-sm-4"><img class="img-responsive" src="{!! asset($annonce->voiture->car_image) !!}">
						</div>
						<div class="col-xs-7">
							<h4 class="product-name"><strong>{{ $annonce->title }}</strong></h4>
						</div>
						<div class="col-xs-8	">
							<div class="col-xs-3">
								<h5> <strong>{{ $annonce->date }} </strong></h5>
                                    <h3><small> De {{ $annonce->from }}h à {{ $annonce->to }}h<span class="text-muted"></span></small></h3>
              </div>
							<div class="col-xs-6 text-right">
										<h5><strong> {{ $annonce->price }} <span class="text-muted">Dhs/h</span></strong></h5>
							</div>
							
							<div class="col-sm-2">


							<a href="/annonce/{{$annonce->id}}">	<button type="button" class="btn btn-success btn-lg">
									<span class="glyphicon glyphicon-search"	> </span>
								</button></a>

								<div class="" style="color:green">
                    <h5><strong> {{ $annonce->city }} <span class="text-muted"></span></strong></h5>
							</div>
                            
                            </div>

                        </div>
                    </div>
                    <hr>
                     @empty
                            Pas d'annonces actives pour le moment
				</div>
					<hr>
                @endforelse
                
		
					<div class="row">
						<div class="text-center">
							
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Rénitialiser la page
								</button>
							</div>
						</div>
					</div>
				

                

			</div>
			

        </div>

    </div>


<br><br><br>
             <script>
            $(function (){
            
                $('#date').datepicker({
                    dateFormat : 'yy-mm-dd',
                    autoclose:true,
                    todayHighlight : true,
                    showOtherMonths : true,
                    selectOtherMonths : true,
                    autoclose:true,
                    changeMonth : true,
                    minDate : new Date()
                        });
                    });

                    const pasteBox = document.getElementById("date");
                        pasteBox.onpaste = e => {
                            e.preventDefault();
                            return false;
                        };
        </script>            
@endsection




        
     