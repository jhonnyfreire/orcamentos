@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="row">

    <table class="table">
      <thead>
        <th>ID</th>
        <th>Descrição</th>
        <th>Unidade</th>
        <th>Valor</th>
      </thead>
      <tbody>

        @foreach($recursos as $recurso)
          <tr>
            <td><a href="{{ route('recursos.edit', $recurso)}}">{{ $recurso->id }}</a></td>
            <td>{{ $recurso->descricao }}</td>
            <td>{{ $recurso->unidade }}</td>
            <td>{{ $recurso->valor }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>

    </div>

    <div class="row">

      {{ $recursos->links() }}

    </div>

    <div class="row">

      <a href="{{ route('recursos.create') }}" class="btn btn-primary">Adicionar</a>
    </div>

  </div>

@endsection