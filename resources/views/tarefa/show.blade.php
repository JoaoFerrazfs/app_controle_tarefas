@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ $tarefa }} </div>

                    <div class="card-body">
                        <div class="mb-3">

                            <fieldset disabled>
                                <label class="form-label">Data limite conclusão</label>
                                <input type="date" class="form-control" value="{{ $data_limite_conclusao}}">
                            </fieldset>

                            <div class="mt-2">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
