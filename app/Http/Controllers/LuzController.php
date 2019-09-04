<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReciboRequest;
use App\ReciboLuz;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class LuzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $recibo = ReciboLuz::all();
        } catch (\Exception $exception) {
            return redirect()->route('web.index');
        }
        //return view('recibos.luz.lista')->with('luz',$recibo);
        $data = [
            'titulo' => 'Recibos de Luz',
            'recibos' => $recibo,
        ];
        return view('recibos.listado')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'titulo' => 'Luz',
            'icono' => 'fa-lightbulb',
            'logo' => asset('img/images/edesur.png'),
            'action' => route('luz.store')
        ];
        return view('recibos.crear')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReciboRequest $request)
    {
        $nuevoRecibo = new ReciboLuz($request->all());
        try{
            $nuevoRecibo->save();
            return redirect()->route('luz.index')->with('success','Receta creada con exito');
        }catch (Exception $exception){
            return redirect()->back()->with('error','El recibo no se pudo Cargar');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
