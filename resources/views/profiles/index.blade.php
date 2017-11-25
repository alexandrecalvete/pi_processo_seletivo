@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Processo Seletivo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Esta é a página do perfil da pessoa.</h2>
                        
                        <ol>ID:</ol>
                        <ol>Nome:</ol>
                        <ol>Data de Nascimento:</ol>
                        <ol>Rg:</ol>
                        <ol>Cpf:</ol>
                        <ol>Sexo:</ol>
                        <ol>Nome da mãe:</ol>
                        <ol>Nome do pai:</ol>
                        <ol>Passaporte:</ol>
                        <ol>Naturalidade</ol>
                        <ol>Telefone:</ol>
                        <ol>Celular:</ol>
                        <ol>Escolaridade:</ol>
                        <ol>Emissor do rg:</ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
