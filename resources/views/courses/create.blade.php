@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Cadastro do Curso</h1></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section mt-20">
                                
                                {!! Form::open(['route' => 'course.store']) !!}
                                    <div class="form-group row">
                                        {!! Form::label('nome', 'Nome:', ['class' => 'col-md-2 col-form-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome do Curso']) !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            
                                            {!! Form::submit('Salvar', ['class' => 'pull-right btn btn-success btn-submit']) !!}    
                                            <a href="{{ route('course.index') }}" class="btn btn-warning pull-left">Voltar</a>
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
