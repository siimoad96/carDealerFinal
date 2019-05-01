@include('layouts.admin')

    <div class="container">

      <a href="{{ route('A_AnnonceList') }}">Retour à la liste</a>
      <h1>Editer l'annonce</h1>
 
      {{ Form::open( [ 'url' => URL::action('AnnoncesController@updateAnnonce', $annonce ), 'method' => 'post'])}}
        <p>{{ Form::label('id', 'Id :') }} {{ Form::text('id', $annonce->id, array('disabled' => 'disabled')) }}</p>
        <p>{{ Form::label('titre', 'Titre :') }} {{ Form::text('title',$annonce->title) }}</p>
        <p>{{ Form::label('city', 'City :') }} {{ Form::text('city',$annonce->city) }}</p>
        <p>{{ Form::label('price', 'Price :') }} {{ Form::text('price',$annonce->price) }}</p>
        <p>{{ Form::label('date', 'Date :') }} {{ Form::text('date',$annonce->date) }}</p>
        <p>{{ Form::label('from', 'From :') }} {{ Form::text('from',$annonce->from) }}</p>
        <p>{{ Form::label('to', 'To :') }} {{ Form::text('to',$annonce->to) }}</p>
        <p>{{ Form::label('u_name', 'Partenaire :') }} {{ Form::text('u_name',$annonce->u_name) }}</p>
        <p>{{ Form::label('v_marque', 'Voiture :') }} {{ Form::text('v_marque',$annonce->v_marque) }}</p>
        <p>{{ Form::label('status', 'Status :') }} {{ Form::text('status',$annonce->status) }}</p>
         {{ Form::submit() }}
      {{ Form::close() }}
   </body>
</html>