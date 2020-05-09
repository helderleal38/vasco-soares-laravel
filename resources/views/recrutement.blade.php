@extends('layouts.app')

@section('content')
<div class="container-register">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('recrutement') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                            <div class="col-md-6">
                                <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Matière à enseigner') }}</label>
                            <div class="col-md-6">
                                <input id="matter" type="text" class="form-control @error('matter') is-invalid @enderror" name="matter" value="{{ old('matter') }}" required autocomplete="matter" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="scoolLevel" class="col-md-4 col-form-label text-md-right">{{ __('Niveau scolaire') }}</label>
                            <div class="col-md-6">
                                <input id="scoolLevel" type="text" class="form-control @error('scoolLevel') is-invalid @enderror" name="scoolLevel" value="{{ old('scoolLevel') }}" required autocomplete="scoolLevel" autofocus>
                            </div>
                        </div>
                        <form>
                            <div class="form-group row">
                                <label for="exampleFormControlFile1" class="col-md-4 col-form-label text-md-right">CV</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </form>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer') }}
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
