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
                    
                    @foreach($profiles as $profile)
                    
                        

                    <tr>
                        <td class="col-sm-2"{{ $profile->nome }}</td>
                        <td class="col-sm-2"{{ $profile->data_nascimento }}</td>
                        <td class="col-sm-2"{{ $profile->rg }}</td>
                        <td class="col-sm-2"{{ $profile->cpf }}</td>
                        <td class="col-sm-2"{{ $profile->sexo }}</td>
                        <td class="col-sm-2"{{ $profile->nomePai }}</td>
                        <td class="col-sm-2"{{ $profile->nomeMae }}</td>
                        <td class="col-sm-2"{{ $profile->passaporte }}</td>
                        <td class="col-sm-2"{{ $profile->telefone }}</td>
                        <td class="col-sm-2"{{ $profile->celular }}</td>
                        <td class="col-sm-2"{{ $profile->naturalidade }}</td>
                        <td class="col-sm-2"{{ $profile->escolaridade }}</td>
                        <td class="col-sm-2"{{ $profile->emissor_rg }}</td>
                        <td class="col-md-1">
                        </tr>
                       

                    @endforeach
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
