@extends('template.main')
@section('title', 'List | Employees ')
@section('content')
{{--SELECTS--}}
  <div class="panel panel-default">
    <div class="panel-body">
<a href="/admin/employees/create"><button type="button" class="btn btn-success">Register Employee</button></a>

     

  </div>
    <center>{!! $employees->render()!!}</center>
 </div>
   {{--SELECTS--}}
<table class="table table-striped">
  <thead>
   
    <th>Nombre</th>
    <th>Email</th>
    <th>Puesto</th>
    <th>Domicilio</th>
    <th>Fecha de nacimiento</th>
    <th>Habilidad</th>
   <th>Puntuación de la habilidad</th>

  </thead>
  <tbody>

  @foreach ($employees as $employee)
    <tr>
      <td></br>{{$employee->nombre}}</td>
        <td></br>{{$employee->email}}</td>
      <td></br>{{$employee->puesto}}</td>
      <td></br>{{$employee->domicilio}}</td>
      <td></br>{{$employee->fecha_de_nacimiento}}</td>
      <td></br>{{$employee->skill}}</td>
      <td></br>{!! Form::open(['route' => ['employees.store'], 'method' => 'POST', 'class' => 'navbar-form pull-right']) !!}
        {!!Form:: hidden('id', $employee->id, ['class' => 'form-control','placeholder' =>'Nombre de la categoría'] )!!}
          <div class="form-group"><label for="">Nivel:</label>
  <select  id="nivel"  name="nivel" class="form-control">
  
<option style="width: 100%;" value="{{$employee->puntuacion_habilidad}}">{{$employee->puntuacion_habilidad}}</option>
        

    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
   




  </select>
  </div>  <div class="form-group">
      {!! Form::submit('Actualizar', ['class' => 'btn btn-primary'] ) !!}
          </div>
    {!!Form::close() !!}</td>
      
    </tr>



  @endforeach

 


  </tbody>

</table>

<center>{!! $employees->render()!!}</center>
@endsection
