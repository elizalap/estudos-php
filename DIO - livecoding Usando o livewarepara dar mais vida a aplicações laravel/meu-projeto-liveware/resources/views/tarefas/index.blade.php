@extends('layouts.default')

@section('content')
<h1>Tarefas</h1>

<form action="{{route('tarefas.index')}}" method="GET">
   @csrf
   <input type="text" name="busca" placeholder="Buscar Tarefa">
</form>
<table>
   <thead>
      <tr>
         <th>Id</th>
         <th>Categoria</th>
         <th>Nome</th>
         <th>Conclusão</th>
         <th></th>
      </tr>
   </thead>
   <tbody>
      @foreach ($tarefas as $tarefa)
         <tr>
            <td>{{$tarefa->id}}</td>
            <td>{{$tarefa->categoria}}</td>
            <td>{{$tarefa->titulo}}</td>
            <td>{{$tarefa->concluida}}</td>
            <td>
               <a href="#">Editar</a>
               <a href="#">Excluir</a>
            </td>
         </tr>

      @endforeach
   </tbody>
</table>
@endsection