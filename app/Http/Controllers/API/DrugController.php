<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drug;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $drugs = Drug::with('company')->paginate(2);
        // return response()->json($drugs);

        // dd('test');

        $drugs = Drug::with('company')->paginate(2);
        return response()->json($drugs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_drug = Drug::create($request->all());
        return response()->json([
            'status'=>true,
            'message'=>'Drug Created Successfully',
            'data'=>$new_drug
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
