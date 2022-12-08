@extends('app.layouts.basico')
@section('title', 'Fornecedor')
@section('content')

<div class="titulo-pagina-2">
   <p>Fornecedor - Listar</p>
</div>

<div class="menu">
   <a href="{{route('app.fornecedor.adicionar')}}">Novo</a>
      <a href="{{route('app.fornecedor')}}">Consulta</a>
</div>

<div class="informacao-pagina">
   <div style="width: 30%; margin-left: auto; margin-right: auto;">
      Lista
   </div>
</div>

@endsection