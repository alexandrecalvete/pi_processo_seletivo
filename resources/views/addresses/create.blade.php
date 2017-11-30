@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Cadastro do Endereço</h1></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section mt-20">
                                
                                {!! Form::open(['route' => 'address.store']) !!}
 
                                        <div class="form-group row">
                                        {!! Form::label('rua', 'Rua:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('rua', '', ['class' => 'form-control', 'placeholder' => 'Digite o nome da rua']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('numero_endereco', 'Número:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                        {!! Form::text('numero_endereco', '', ['class' => 'form-control', 'placeholder' => 'Digite o número do seu endereço']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('cep', 'Cep:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('cep', '', ['class' => 'form-control', 'placeholder' => 'Digite seu cep']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('bairro', 'Bairro:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('bairro', '', ['class' => 'form-control', 'placeholder' => 'Digite o nome do seu bairro']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('complemento', 'Complemento:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('complemento', '', ['class' => 'form-control', 'placeholder' => 'Digite seu complemento do endereço']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('tipo', 'Tipo:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('tipo', '', ['class' => 'form-control', 'placeholder' => 'Digite o tipo']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('cidade', 'Cidade:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('cidade', '', ['class' => 'form-control', 'placeholder' => 'Digite sua cidade']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('estado', 'Estado:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('estado', '', ['class' => 'form-control', 'placeholder' => 'Digite seu estado']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('pais', 'País:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('pais', '', ['class' => 'form-control', 'placeholder' => 'Digite seu país']) !!}
                                        </div>
                                      </div>

                                       
                                        <div class="form-group row">
                                        <div class="col-sm-12">
                                            
                                            {!! Form::submit('Salvar', ['class' => 'pull-right btn btn-success btn-submit']) !!}    
                                            <a href="{{ route('address.index') }}" class="btn btn-warning pull-left">Voltar</a>
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
