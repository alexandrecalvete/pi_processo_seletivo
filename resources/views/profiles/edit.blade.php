@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('partials/alerts')
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Edição do Prefil</h1></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section mt-20">
                                
                                {!! Form::open(['method' => 'PUT', 'route' => array('profiles.update', $profile)]) !!}
                                    <div class="form-group row">
                                        {!! Form::label('nome', 'Nome', ['class' => 'col-md-2 col-form-label']) !!}
                                        <div class="col-md-10">
                                           {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Data de Nascimento']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Rg']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Cpf']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Sexo']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome do Pai']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome da Mãe']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Passaporte']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Naturalidade']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Celular']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Emissor do rg']) !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            
                                            {!! Form::submit('Salvar', ['class' => 'pull-right btn btn-success btn-submit']) !!}    
                                            <a href="{{ route('profiles.index') }}" class="btn btn-warning pull-left">Voltar</a>
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
