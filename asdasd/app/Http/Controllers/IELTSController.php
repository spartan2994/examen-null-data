<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IELTS;
use Laracasts\Flash\Flash;
class IELTSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $users = IELTS::Search($request->curso, $request->escuela, $request->status, $request->asesor, $request->date, $request->date2)->orderBy('Fecha_de_envio', 'ASC')->paginate(5);
      $users->setPath('ielts?curso='.$request->curso.'&escuela='.$request->escuela.'&status='.$request->status.'&asesor='.$request->asesor.'&date='.$request->date.'&date2='.$request->date2.'&buscar=');
      return view('admin.ielts.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      $ielt = IELTS::find($id);
      return view('admin.ielts.edit')->with('ielt', $ielt);
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
      $ielt = IELTS::find($id);
      $ielt->Asesor =$request->name;
      $ielt ->save();
      flash::warning("Se ha actualizado el asesor ".$ielt->Asesor. " de forma exitosa.");
    echo"<script>

    window.history.go(-2);

</script>";

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
