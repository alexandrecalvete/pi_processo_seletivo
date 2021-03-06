@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Cadastro da Isenção</h1></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section mt-20">
                                
                                {!! Form::open(['route' => 'exemption.store']) !!}

 <                                      div class="form-group row">
                                        {!! Form::label('inscricao', 'Inscrição:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('inscricao', '', ['class' => 'form-control', 'placeholder' => 'Informe sua inscrição']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('motivo', 'Motivo:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                        {!! Form::text('motivo', '', ['class' => 'form-control', 'placeholder' => 'Informe seu motivo']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('cep', 'Homologado:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('cep', '', ['class' => 'form-control', 'placeholder' => 'Digite seu cep']) !!}
                                        </div>
                                      </div>

                                   
                                        <div class="form-group row">
                                        <div class="col-sm-12">
                                            
                                            {!! Form::submit('Salvar', ['class' => 'pull-right btn btn-success btn-submit']) !!}    
                                            <a href="{{ route('exemption.index') }}" class="btn btn-warning pull-left">Voltar</a>
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
