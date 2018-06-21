@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar novo recurso</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('recursos.store') }}">
                        @csrf

                        <div class="form-group row">
                          <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                          <div class="col-md-6">
                              <input id="descricao" type="text" class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}" name="descricao" required autofocus value="{{ old('descricao') }}">

                              @if ($errors->has('descricao'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('descricao') }}</strong>
                                  </span>
                              @endif
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="unidade" class="col-sm-4 col-form-label text-md-right">{{ __('Unidade') }}</label>

                            <div class="col-md-6">
                                <input id="unidade" type="text" class="form-control{{ $errors->has('unidade') ? ' is-invalid' : '' }}" name="unidade" value="{{ old('unidade') }}">

                                @if ($errors->has('unidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('unidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="valor" class="col-sm-4 col-form-label text-md-right">{{ __('Valor') }}</label>

                            <div class="col-md-6">
                                <input id="valor" type="number" class="form-control{{ $errors->has('valor') ? ' is-invalid' : '' }}" name="valor" value="{{ old('valor') }}" step="0.01">

                                @if ($errors->has('valor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('valor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                                <a class="btn btn-danger" href="{{ route('recursos.index') }}">
                                    {{ __('Cancelar') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection