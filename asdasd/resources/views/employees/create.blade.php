@extends('template.main')

@section('title', 'Register Employee')
@section('content')

{!!Form::open(['route' => 'employees.store', 'method' => 'POST' ]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nombre*') !!}
      {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' =>'Nombre completo'] ) !!}


    </div>
    
    <div class="form-group">
      {!! Form::label('email', 'Email*') !!}
      {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' =>'example@mail.com',] ) !!}


    </div>
       <div class="form-group">
      {!! Form::label('puesto', 'Puesto*') !!}
      {!! Form::select('puesto',['' => 'Selecciona un puesto', 'Desarrollador' => 'Desarrollador', 'Diseñador' => 'Diseñador'], null, ['class' => 'form-control'] ) !!}


    </div>
 
      <div class="form-group">
      {!! Form::label('domicilio', 'Domicilio*') !!}
      {!! Form::textarea('domicilio', null, ['class' => 'form-control', 'placeholder' =>'Your Adress...', ] ) !!}


    </div>
     <div class="form-group">
      {!! Form::label('facha de nacimiento', 'Fecha de nacimiento*') !!}
      {!! Form::date('fecha_de_nacimiento', null, ['class' => 'form-control', 'YYY/MM/DD', ] ) !!}


    </div>
    <div class="form-group">
      {!! Form::label('Mejor habilidad', 'Mejor habilidad*') !!}
      {!! Form::select('skill',['' => 'Selecciona una habilidad', 'PHP' => 'PHP', 'JAVASCRIPT' => 'JAVASCRIPT', 'CSS' => 'CSS'], null, ['class' => 'form-control'] ) !!}


    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary'] ) !!}
          </div>
    {!!Form::close() !!}



  @endsection
