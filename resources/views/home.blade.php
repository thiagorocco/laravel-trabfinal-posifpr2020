@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Controle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span class="text-success">Login efetuado com sucesso!</span><br><br>
                    <h2 class="bg bg-success m-1 p-4 text-center"><a href="/series" class="text text-light">Lista de séries clique aqui!</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
