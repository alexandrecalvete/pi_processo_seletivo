@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Esta é a página do endereço da pessoa.</h2>
                        
                        <ol>Rua:</ol>
                        <ol>Numero do endereço:</ol>
                        <ol>Cep:</ol>
                        <ol>Bairro:</ol>
                        <ol>Complemento:</ol>
                        <ol>Cidade:</ol>
                        <ol>Tipo:</ol>
                        <ol>Estado:</ol>
                        <ol>País:</ol>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
