@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Cadastro do Perfil</h1></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section mt-20">
                                
                                {!! Form::open(['route' => 'profile.store']) !!}
                                   

                                        <div class="form-group row">
                                        {!! Form::label('nome', 'Nome:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Digite seu nome']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('data_nascimento', 'Data de nascimento:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                        {!! Form::text('data_nascimento', '', ['class' => 'form-control', 'placeholder' => 'Digite sua data de nascimento']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('rg', 'Rg:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('rg', '', ['class' => 'form-control', 'placeholder' => 'Digite seu rg']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('cpf', 'Cpf:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('cpf', '', ['class' => 'form-control', 'placeholder' => 'Digite seu cpf']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('sexo', 'Sexo:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('sexo', '', ['class' => 'form-control', 'placeholder' => 'Digite seu sexo']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('nomePai', 'Nome do pai:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('nomePai', '', ['class' => 'form-control', 'placeholder' => 'Digite o nome do seu pai']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('nomeMae', 'Nome da mãe:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('nomeMae', '', ['class' => 'form-control', 'placeholder' => 'Digite o nome da sua mãe']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('passaporte', 'Passaporte:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('passaporte', '', ['class' => 'form-control', 'placeholder' => 'Digite seu passaporte']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('telefone', 'Telefone:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('telefone', '', ['class' => 'form-control', 'placeholder' => 'Digite seu telefone']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('celular', 'Celular:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('celular', '', ['class' => 'form-control', 'placeholder' => 'Digite seu celular']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('naturalidade', 'Naturalidade:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('naturalidade', '', ['class' => 'form-control', 'placeholder' => 'Digite sea naturalidade']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('escolaridade', 'Escolaridade:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('escolaridade', '', ['class' => 'form-control', 'placeholder' => 'Digite sea escolaridade']) !!}
                                        </div>
                                      </div>

                                        <div class="form-group row">
                                        {!! Form::label('emissor_rg', 'Emissor do Rg:', ['class' => 'col-md-2 col-form-label']) !!}
                                        
                                        <div class="col-md-10">
                                            
                                            {!! Form::text('emissor_rg', '', ['class' => 'form-control', 'placeholder' => 'Digite seu emissor do rg']) !!}
                                        </div>
                                      </div>

                                            
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            
                                            {!! Form::submit('Salvar', ['class' => 'pull-right btn btn-success btn-submit']) !!}    
                                            <a href="{{ route('profile.index') }}" class="btn btn-warning pull-left">Voltar</a>
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
