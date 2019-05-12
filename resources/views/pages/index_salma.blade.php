<style>

    a.slide-image{
      height: 150px;
    } ;

    
        body {font-family: Arial, Helvetica, sans-serif; }
        form {border: 3px solid #f1f1f1; padding:1.5em; background-color:whitesmoke ; color:`black; font-size:1.1em;}
        
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
  
  @extends('layouts.appp')
  
  @section('content')
  <br> 
  <div class="">
  
      <div class="row">
  
          <div class="col-md-4">
              <h2 class=" " align="center">CarDealer</h2>
              
  <br>         
      

         
            <form type="POST" action="/rechercheDate">
                <br>
           <div align="center"> <img src="{{asset(('img/logo.png'))}}" alt="carDealer" width="200px"> </div>
            <br><br>

            {{ csrf_field() }}
                {{ method_field('get') }}

                <div class="form-group">
                    <label for="type">Date</label>
                    <input id='date' type="date" name="date" class="form-control" placeholder="Entrer la date" required=required>
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
  
                  <div class="col-md-12">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                          </ol>
                          <div class="carousel-inner" >
                              <div class="item active">
                                  <img class="slide-image" src="{!! asset('img/audi.jpg') !!}" alt="" height="130">
                              </div>
                              <div class="item " >
                                  <img class="slide-image" src="{!! asset('img/mercedes.jpg') !!}"  alt="">
                              </div>
                              <div class="item" >
                                  <img class="slide-image" src="{!! asset('img/bmw.jpg') !!}" alt="" >
                              </div>
                              <div class="item" >
                                  <img class="slide-image" src="{!! asset('img/gla.jpg') !!}" alt="" >
                              </div>
                              <div class="item" >
                                  <img class="slide-image" src="{!! asset('img/kia.jpg') !!}" alt="" >
                              </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                      </div>
                  </div>
  
              </div>
              
              <div class="row">
                  @foreach($annonces as $annonce)
  
                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail">
                          <?php $v = App\Voiture::find($annonce->voiture_id)->first(); ?>
                          <img src="{!! asset($annonce->voiture->car_image) !!}" alt="" width="200" height="200">
                          <div class="caption">
                              <h4><a href="/login">{{ $annonce->title }}</a>    </h4>
                              <dt >{{ $annonce->price}} Dhs/h</dt> <br>
                              <p>Pour plus de details <a target="_blank" href="{{ route('login') }}"> Pour plus de details</a>.</p>
                          </div>
                           
                          <div class="ratings">
                              <p class="pull-right">{{ $annonce->city}}</p>
                              <p>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>
                                  <span class="glyphicon glyphicon-star"></span>

                              </p>
                          </div>
                      </div>
                  </div>
  
                  @endforeach
  
                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <h4><a href="#">Plus d'annances?</a>
                      </h4>
                      <p>Connecter-vous a CarDealer. C'est gratui.  <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">CarDealer</a> 
                                  est une plateforme fondée par des élèves ingénieurs de l'ENSA de Tétouan en 2019,  CarDealer est une plateforme de location de voitures destinée aux gens qui veulent de bonnes
                                   voitures à des prix bas</p>
                      <a class="btn btn-primary" target="_blank" href="{{ route('register') }}">Créer un compte</a>
                  </div>
  
              </div>
  
          </div>
  
      </div>
  
        <script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('min', today);
        </script>   

  
  @endsection
  
  