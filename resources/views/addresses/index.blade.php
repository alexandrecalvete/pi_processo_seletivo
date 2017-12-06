@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Endereço</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Esta é a página do endereço da pessoa.</h2>

                       <div class="panel panel-default">
                         <div class="">
                            <table class="table">
                                <tr>
                                    <th>Rua</th>
                                    <th>Número do endereço</th>
                                    <th>Cep</th>
                                    <th>Bairro</th>
                                    <th>Complemento</th>
                                    <th>Tipo</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>País</th>
                                   </tr>

                                @foreach($addresses as $address)
                                <tr>
                                    
                                    <td>{{ $address->rua }}</td>
                                    <td>{{ $address->numero_endereco }}</td>
                                    <td>{{ $address->cep }}</td>
                                    <td>{{ $address->bairro }}</td>
                                    <td>{{ $address->complemento }}</td>
                                    <td>{{ $address->tipo }}</td>
                                    <td>{{ $address->cidade }}</td>
                                    <td>{{ $address->estado }}</td>
                                    <td>{{ $address->pais }}</td>
                                   </tr>
                                @endforeach

                            </table>
                      </div>
                    </div>

                       
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
