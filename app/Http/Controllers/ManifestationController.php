<?php

namespace App\Http\Controllers;

use App\Models\Manifestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManifestationController extends Controller
{
    private $manifestationObj;

    public function __construct(){
        $manifestationObj = new Manifestation;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manifestations = DB::table('manifestations')->get();
        $departments = DB::table('departments')->get();
        $origins = DB::table('origins')->get();
        return view('manifestation', compact('manifestations', 'departments', 'origins'));
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
        $this->manifestationObj->manifestation_date = $request->input('manifestation_date');
        $this->manifestationObj->complainer = $request->input('complainer');
        $this->manifestationObj->complainer_phone = $request->input('complainer_phone');
        $this->manifestationObj->complainer_email = $request->input('complainer_email');
        $this->manifestationObj->id_user = 0;
        $this->manifestationObj->id_department = $request->input('id_department');
   
       
        $this->manifestationObj->save();

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
        echo $id;
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
        //
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
