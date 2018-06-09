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
        
   <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
    <option value="60">60</option>
    <option value="61">61</option>
    <option value="62">62</option>
    <option value="63">63</option>
    <option value="64">64</option>
    <option value="65">65</option>
    <option value="66">66</option>
    <option value="67">67</option>
    <option value="68">68</option>
    <option value="69">69</option>
    <option value="70">70</option>
    <option value="71">71</option>
    <option value="72">72</option>
    <option value="73">73</option>
    <option value="74">74</option>
    <option value="75">75</option>
    <option value="76">76</option>
    <option value="77">77</option>
    <option value="78">78</option>
    <option value="79">79</option>
    <option value="80">80</option>
    <option value="81">81</option>
    <option value="82">82</option>
    <option value="83">83</option>
    <option value="84">84</option>
    <option value="85">85</option>
    <option value="86">86</option>
    <option value="87">87</option>
    <option value="88">88</option>
    <option value="89">89</option>
    <option value="90">90</option>
    <option value="91">91</option>
    <option value="92">92</option>
    <option value="93">93</option>
    <option value="94">94</option>
    <option value="95">95</option>
    <option value="96">96</option>
    <option value="97">97</option>
    <option value="98">98</option>
    <option value="99">99</option>
    <option value="100">100</option>




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
