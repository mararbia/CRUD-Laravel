<?php

namespace App\Http\Controllers;

use App\Passageiro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
//use Mockery\Generator\StringManipulation\Pass\Pass;

class PassageiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passageiro = Passageiro::orderBy('id')->get();
        return view('passageiros.index', ['passageiros' => $passageiro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('passageiros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Passageiro::create($data);

        Session::flash('message', $data['nome'] . ', criado com sucesso!' );
        return redirect('/passageiros');
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
        $passageiro = Passageiro::find($id);
        return view ('passageiros.edit', ['passageiro' => $passageiro]);
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
        $passageiro = Passageiro::find($id);
        $data = $request->all();
        $passageiro->update($data);

        Session::flash('message', $passageiro['nome'] . ', atualizado com sucesso!' );
        return redirect('/passageiros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passageiro = Passageiro::find($id);
        $passageiro->destroy($id);

        Session::flash('message', $passageiro['nome'] . ', deletado com sucesso!' );
        return redirect('/passageiros');
    }
}
