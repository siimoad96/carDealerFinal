@include('layouts.admin')
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                        <div class="col-sm-8">
                                            <h3>Modifier Profile
                                                <br>
                                            </h3>
                                            <hr>
                                    <form action= "{{ route('annonce.update',$annonces->id) }}" method= "POST" role="form" enctype="multipart/form-data">
         @csrf
                                        
                                        <div class="form-group">
    <label for="id">Id</label>
    <input type="text" class="form-control" id="id" value=" {{$annonces->id }}" disabled>
  </div>
   <div class="form-group">
    <label for="name">Id du partenaire </label>
    <input type="text" class="form-control" id="name" value=" {{$annonces->partenaire_id}} " disabled>
  </div>
        <div class="form-group">
    <label for="to">Id de voiture</label>
    <input type="marque" class="form-control" id="marque" value="{{ $annonces->voiture_id}}  " disabled>
  </div>
    <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" name ="title" value="{{ $annonces->title}}" >
  </div>
    <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city"  name ="city" value="{{$annonces->city}} " >
  </div>
    <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" class="form-control" id="prix" name ="price" value="{{$annonces->price}}" >
  </div>
    <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="id" name ="date" value="{{$annonces->date}}" >
  </div>
      <div class="form-group">
    <label for="from">From</label>
    <input type="number" class="form-control" id="from" name ="from" value="{{$annonces->from}}" >
  </div>
      <div class="form-group">
    <label for="to">To</label>
    <input type="number" class="form-control" id="to" name ="to" value="{{$annonces->to}}" >
  </div>
        <div class="form-group">
    <label for="privilege">Status</label>
    <input type="text" class="form-control" id="privilege" name ="privilege" value=" {{$annonces->privilege}} " >
  </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    <div class="container">

    

   </body>
</html>