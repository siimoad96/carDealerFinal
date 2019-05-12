@extends('layouts.client')

@section('content')

        <h1  ></h1>
        <div >

            <h3>Veuillez choisir un date </h3><br><br>
                </div>
            <form type="POST" action="/Client/rechercheDate">

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

        <script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('min', today);
        </script>  
        <script>/*
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
                        };*/
        </script>                 
@endsection