<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\FollowUp;
use App\Models\Manifestation;
use App\Models\Origin;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManifestationController extends Controller
{
    private $manifestationObj;

    public function __construct()
    {
        $manifestationObj = new Manifestation;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manifestations = Manifestation::all();
        $origins = Origin::all();
        $types = Type::all();
        $departments = Department::all();

        return view('manifestation', compact('manifestations', 'origins', 'types', 'departments'));
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
        $manifestationObj = new Manifestation();

        $manifestationObj->type_id = $request->input('type_id');
        $manifestationObj->manifestation_date = Carbon::parse($request->input('manifestation_date'));
        $manifestationObj->complainer = $request->input('complainer');
        $manifestationObj->origin_id = $request->input('origin_id');
        $manifestationObj->complainer_phone = $request->input('complainer_phone');
        $manifestationObj->complainer_email = $request->input('complainer_email');
        $manifestationObj->description = $request->input('description');
        $manifestationObj->user_id = 0;
        $manifestationObj->department_id = $request->input('department_id');

        $manifestationObj->save();

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
        $manifestation = Manifestation::findOrFail($id);

        $types = Type::all();
        $departments = Department::all();
        $origins = Origin::all();
        $followups = FollowUp::all()->sortByDesc('id');
        return view('manifestation-detail', compact('manifestation', 'origins', 'types', 'departments', 'followups'));
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
