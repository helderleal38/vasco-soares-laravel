@extends('layouts.app')

@section('content')
<div class="container-pre_inscription">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pré-inscription</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pre_inscription') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>
                            <div class="col-md-6">
                                <input id="firstName" type="text" readonly class="form-control-plaintext" name="firstName" value="{{ Auth::user()->name }}" required autocomplete="firstName" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="scoolName" class="col-md-4 col-form-label text-md-right">{{ __('Ecole') }}</label>
                            <div class="col-md-6">
                                <input id="scoolName" type="text" class="form-control @error('scoolName') is-invalid @enderror" name="scoolName" value="{{ old('scoolName') }}" required autocomplete="scoolName" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Année') }}</label>
                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Matière souhaité') }}</label>
                            <div class="col-md-6">
                                <input id="matter" type="text" class="form-control @error('matter') is-invalid @enderror" name="matter" value="{{ old('matter') }}" required autocomplete="matter" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="responsible" class="col-md-4 col-form-label text-md-right">{{ __('Responsable légal') }}</label>
                            <div class="col-md-6">
                                <input id="responsible" type="text" class="form-control @error('responsible') is-invalid @enderror" name="responsible" value="{{ old('responsible') }}" required autocomplete="responsible" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" readonly class="form-control-plaintext" name="email" value="{{Auth::user()->email}}" required autocomplete="email">

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