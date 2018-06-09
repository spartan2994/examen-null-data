<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Employee;
class EmployeesController extends Controller
{
     public function index(Request $request)
    {
       
      $employees = Employee::orderBy('id','ASC')->paginate(5);

      return view('employees.index')->with('employees', $employees);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
if(isset($request->nivel)){
    DB::select( DB::raw("UPDATE `employees` SET `puntuacion_habilidad` = '$request->nivel' WHERE `employees`.`id` = '$request->id'"));
return back();

}
if(isset($request->nombre)){

        $this->validate($request, [
'nombre' => 'required',
'email' => 'email | required',
'puesto' => 'required',
'domicilio' => 'required| min:5|max:200',
'fecha_de_nacimiento' => 'required',
'domicilio' => 'required'




        ]);
        $employees = new Employee($request -> all());
$employees->save();

return view('employees.create');}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    

}
