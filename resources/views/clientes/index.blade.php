@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="row">

    <table class="table">
      <thead>
        <th>ID</th>
        <th>Cliente</th>
        <th>E-mail</th>
        <th>Telefone</th>
      </thead>
      <tbody>

        @foreach($clientes as $cliente)
          <tr>
            <td><a href="{{ route('clientes.edit', $cliente)}}">{{ $cliente->id }}</a></td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefone }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>

    </div>

    <div class="row">

      {{ $clientes->links() }}

    </div>

    <div class="row">

      <a href="{{ route('clientes.create') }}" class="btn btn-primary">Adicionar</a>
    </div>

  </div>

@endsection