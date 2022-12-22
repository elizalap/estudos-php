@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefas
                  <a href="{{ route('tarefa.exportar') }}" class="float-right" target="_blank"> PDF V2</a>
                  <a href="{{ route('tarefa.export', ['extensao' => 'pdf']) }}" class="float-right mr-3"> PDF</a>
                  <a href="{{ route('tarefa.export', ['extensao' => 'xlsx']) }}" class="float-right mr-3"> XLSX</a>
                  <a href="{{ route('tarefa.export', ['extensao' => 'csv']) }}" class="float-right mr-3"> CSV</a>
                  <a href="{{ route('tarefa.create') }}" class="float-right mr-3"> + Criar tarefa</a>
                  
                </div>

                <div class="card-body">
                  <table class="table">
                     <thead>
                       <tr>
                         <th scope="col">ID</th>
                         <th scope="col">Tarefa</th>
                         <th scope="col">Data de conclusão</th>
                         <th></th>
                         <th></th>
                       </tr>
                     </thead>
                     <tbody>
                        @foreach($tarefas as $key => $tarefa)
                           <tr>
                              <th scope="row">{{ $tarefa['id'] }}</th>
                              <td>{{ $tarefa['tarefa'] }}</td>
                              <td>{{ date('d/m/Y', strtotime($tarefa['data_limite_conclusao'])) }}</td>
                              <td><a href="{{ route('tarefa.edit', $tarefa['id']) }}">Editar</a></td>
                              <td>
                                <form method="post" action="{{ route('tarefa.destroy', ['tarefa' => $tarefa->id ]) }}" id="form_{{$tarefa['id']}}">
                                  @csrf
                                  @method('DELETE')
                                  <a href="#" onclick="document.getElementById('form_{{$tarefa['id']}}').submit()">Excluir</a>
                                </form>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                   </table>
                   <nav>
                     <ul class="pagination">
                       <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Anterior</a></li>
                       
                       @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                       <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : ''}}">
                           <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                        </li>
                       @endfor

                       <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Próximo</a></li>
                     </ul>
                   </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
