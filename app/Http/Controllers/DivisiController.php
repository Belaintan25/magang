<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $divisis = Divisi::latest()->paginate(5);
        return view('divisis.index',compact('divisis'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('divisis.create');
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
        $request->validate([
            'nama_divisi' => 'required',
            'nama_penanggung_jawab' => 'required',
            ]);
            
            Divisi::create($request->all());
            
            return redirect()->route('divisis.index')
            ->with('success','Divisi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        //
        return view('divisis.show',compact('divisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisi $divisi)
    {
        //
        return view('divisis.edit',compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        //
        $request->validate([
            'nama_divisi' => 'required',
            'nama_penanggung_jawab' => 'required',
            ]);
            
            $divisi->update($request->all());
            
            return redirect()->route('divisis.index')
            ->with('success','Divisi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        //
        $divisi->delete();
 
 return redirect()->route('divisis.index')
 ->with('success','Divisi deleted successfully');
 }
    }

