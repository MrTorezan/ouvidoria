<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OriginController extends Controller
{

    private $originObj;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $origins = DB::table('origins')->get();
        return view('origins', compact('origins'));
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

        $this->originObj = new Origin();
        $this->originObj->name = $request->input('name');
        $this->originObj->description = $request->input('description');

        $this->originObj->save();

        return back();

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $originObj = Origin::findOrFail($request->idorigin);
        $originObj->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $origin = Origin::findOrFail($request->idorigin);
        $origin->delete();
       return back();
    }
}
