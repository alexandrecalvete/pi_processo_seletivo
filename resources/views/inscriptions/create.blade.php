@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Cadastro da Inscrição</h1></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section mt-20">
                                
                                {!! Form::open(['route' => 'inscription.store']) !!}
                                    <div class="form-group row">
                                        {!! Form::label('nome', 'Nome', ['class' => 'col-md-2 col-form-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Data de pagamento']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Pago']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Primeira opção']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Data de inscrição']) !!}
                                            {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Cotas']) !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            
                                            {!! Form::submit('Salvar', ['class' => 'pull-right btn btn-success btn-submit']) !!}    
                                            <a href="{{ route('inscription.index') }}" class="btn btn-warning pull-left">Voltar</a>
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
