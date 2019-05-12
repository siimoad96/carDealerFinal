@extends('layouts.partenaire')
@section('content')

<style>
    .row{
        padding: 5px;
    }

    .nav-sidebar { 
        width: 100%;
        padding: 30px 0; 
        border-right: 1px solid #ddd;
        font-size: 20px;

    }
    .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
    }
    .nav-sidebar .active a { 
        cursor: default;
        background-color: #0b56a8; 
        color: #fff; 
    }
    .nav-sidebar .active a:hover {
        background-color: #E50000;   
    }
    .nav-sidebar .text-overflow a,
    .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis; 
    }

    .car{
        color:#0b56a8;
    }
</style>
        
    
    <div class="">
  
            <div class="row">
        
                <div class="col-md-3">
                    <br>
                    <img src="{{asset('img/logo.png')}}" alt="" width="250px">
                    <h2 class="car " align="center" >CarDealer</h2>
                    
                    <br>         
                    
                    <nav class="nav-sidebar">
                            <ul class="list-group"style="list-style-type:none;  ">
                              <a href="{{ route('home') }}" data-toggle="tab" class="list-group-item active"><span class="glyphicon glyphicon-list-alt"> Voir Réservations</a>
                              <a href="{{ route('voiture.add') }}" class="list-group-item " ><span class="glyphicon glyphicon-import">  Ajouter Voiture</a>
                              <a href="/Partenaire/ajoutannonce" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-import">  Ajouter Annonce</a>
                              <a href="/Partenaire/voirVoiture" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-import">  Mes Voitures</a>  
                              <a href="/Partenaire/voirAnnonce" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-import">  Mes Annonces</a>                                                         
                            </ul>
                </nav>      
                    
                </div>
                
                <div class="col-md-9">
        
                    <div class="row carousel-holder">

                            <div class="row">
                                    <div class="panel panel-default widget">
                                        <div class="panel-heading">
                                            <br>
                                            <h3 class="panel-title"> <strong>
                                                Demande de réservation</strong></h3>
                                            <span class="label label-info">
                                                10</span>
                                        </div>
                                        @foreach($annonces as $annonce)

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


							<a  href="/Partenaire/demandesReservation/{{$annonce->id}}">	<button type="button" class="btn btn-success btn-lg">
									<span class="glyphicon glyphicon-shopping-cart"	> </span>
								</button></a>

								<div class="" style="color:green">
                    <h5><strong> {{ $annonce->city }} <span class="text-muted"></span></strong></h5>
							</div>


							</div>
						</div>
					</div>
				</div>
					<hr>
                @endforeach
                                    </div>
                                </div>
                                

        
                </div>
        
            </div>  

@endsection
