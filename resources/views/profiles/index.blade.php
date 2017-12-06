@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                      <div class="panel panel-default">
                         <div class="">
                            <table class="table">
                                <tr>
                                    <th>Nome</th>
                                    <th>Data Nascimento</th>
                                    <th>Rg</th>
                                    <th>Cpf</th>
                                    <th>Sexo</th>
                                    <th>Nome do Pai</th>
                                    <th>Nome da Mãe</th>
                                    <th>Passaporte</th>
                                    <th>Naturalidade</th>
                                    <th>Telefone</th>
                                    <th>Celular</th>
                                    <th>Escolaridade</th>
                                    <th>Emissor do Rg</th>
                                   </tr>

                                @foreach($profiles as $profile)

                                   <tr>
                                    
                                    <td>{{ $profile->nome }}</td>
                                    <td>{{ $profile->data_nascimento }}</td>
                                    <td>{{ $profile->rg }}</td>
                                    <td>{{ $profile->cpf }}</td>
                                    <td>{{ $profile->sexo }}</td>
                                    <td>{{ $profile->nomePai }}</td>
                                    <td>{{ $profile->nomeMae }}</td>
                                    <td>{{ $profile->passaporte }}</td>
                                    <td>{{ $profile->naturalidade }}</td>
                                    <td>{{ $profile->telefone }}</td>
                                    <td>{{ $profile->celular }}</td>
                                    <td>{{ $profile->escolaridade }}</td>
                                    <td>{{ $profile->emissor_rg }}</td>  
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
