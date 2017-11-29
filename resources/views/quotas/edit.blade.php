@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('partials/alerts')
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Edição da Cotas</h1></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section mt-20">
                                
                                {!! Form::open(['method' => 'PUT', 'route' => array('quotas.update', $quota)]) !!}
                                    <div class="form-group row">
                                        {!! Form::label('nome', 'Nome', ['class' => 'col-md-2 col-form-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('nome', $quota->nome, ['class' => 'form-control', 'placeholder' => 'Nome da Cotas']) !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            
                                            {!! Form::submit('Salvar', ['class' => 'pull-right btn btn-success btn-submit']) !!}    
                                            <a href="{{ route('quotas.index') }}" class="btn btn-warning pull-left">Voltar</a>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
