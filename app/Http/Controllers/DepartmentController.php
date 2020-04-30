<?php

namespace App\Http\Controllers;

use App\DepartmentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DepartmentController extends Controller
{

    private $departmentObj;

    public function __construct()
    {
        $this->departmentObj = new DepartmentModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = DB::table('departments')->get();
        //dd($this->departmentObj->all());

        return view('department', compact('departments'));
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

        $this->departmentObj->name = $request->input('name');
        $this->departmentObj->responsible = $request->input('responsible');
        $this->departmentObj->email_responsible = $request->input('email_responsible');
        $this->departmentObj->manager = $request->input('manager');
        $this->departmentObj->email_manager = $request->input('email_manager');

        $this->departmentObj->save();
        // dd($this->departmentObj);
        return redirect('department')->with('success', 'Data Saved');
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
