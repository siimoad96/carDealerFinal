@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Register') }} </h1></div> <br> <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="bane" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Selectionner une ville') }}</label>

                            <div class="col-md-6">
                    <select type="text" class="form-control" name = "city" id="city" required=required class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }} value="{{ old('city') }}" required autocomplete="city" autofocus">
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
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="privilege" class="col-md-4 col-form-label text-md-right">{{ __('Partner / Client') }}</label>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="partner" name="privilege" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="partner">Partner</label>
                     
                                <input type="radio" id="client" name="privilege" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="client">Client</label>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
<br> <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
