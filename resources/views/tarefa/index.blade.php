@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tarefas </div>

                    <div class="card-body">


                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data limite conclusão</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tarefas as $tarefa)
                                <tr>
                                    <th>{{ $tarefa->id }} </th>
                                    <td>{{ $tarefa->tarefa }}</td>
                                    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao))}}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>


                        <nav >
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>

                                @for($i = 1; $i <= $tarefas->lastPage() ; $i++ )
                                    <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : ''  }}"><a class="page-link" href="{{$tarefas->url($i)}}">{{ $i }}</a></li>
                                @endfor

                                <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>
                            </ul>
                        </nav>




                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
