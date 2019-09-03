<?php

namespace App\Http\Controllers;

use App\ReciboGas;
use Illuminate\Http\Request;

class ReciboGasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $recibo = ReciboGas::all();
        }catch (\Exception $exception){
            return redirect()->route('web.index');
        }
        $data = [
            'titulo' => 'Recibos de Luz',
            'recibos' => $recibo,
        ];
        return view('recibos.listado')->with('data',$data);
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
     * @param  \App\ReciboGas  $reciboGas
     * @return \Illuminate\Http\Response
     */
    public function show(ReciboGas $reciboGas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReciboGas  $reciboGas
     * @return \Illuminate\Http\Response
     */
    public function edit(ReciboGas $reciboGas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReciboGas  $reciboGas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReciboGas $reciboGas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReciboGas  $reciboGas
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReciboGas $reciboGas)
    {
        //
    }
}
