@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora! Precisamos apenas que voce valide seu email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reeviamos um email para você com o link de validação.
                        </div>
                    @endif

                    Antes de utilizar os recursos da aplicação valide seu email por meio do link de autentificação que enviamos no seu email.
                        <br>
                        caso voce não tenha recebido o link de autenticação, clique no link abaico para que o email seja reenviado,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
