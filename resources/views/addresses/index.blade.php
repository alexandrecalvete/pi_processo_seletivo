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
                       
                    @foreach($addresses as $address)
                    
                        <div class="form-group row">
                        <table>{{ $address->rua }}</table>
                        <table>{{ $address->numero_endereco }}</table>
                        <table>{{ $address->cep }}</table>
                        <table>{{ $address->bairro }}</table>
                        <table>{{ $address->complemento }}</table>
                        <table>{{ $address->tipo }}</table>
                        <table>{{ $address->cidade }}</table>
                        <table>{{ $address->estado }}</table>
                        <table>{{ $address->pais }}</table>
                        </div>
                       

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
