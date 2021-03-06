<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerGroupRequest;
use App\PartnerGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = PartnerGroup::get();

        return response()->json([
            'status' => 'success',
            'message' => 'success to get data',
            'data' => $group
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerGroupRequest $request)
    {
        try {
            $partner_group = PartnerGroup::create([
                'prtnr_add_by' => Auth::user()->id,
                'prtnr_code' => $request->partner_code,
                'prtnr_name' => $request->partner_name,
                'prtnr_desc' => $request->partner_desc,
                'discount' => $request->discount
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'data created',
                'data' => $partner_group
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'failed',
                'message' => 'failed to create data',
                'error' => $th->getMessage()
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PartnerGroup  $partnerGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PartnerGroup $partnerGroup)
    {
        try {
            return response()->json([
                'status' => 'success',
                'messzage' => 'success to get data',
                'data' => $partnerGroup
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'failed',
                'message' => 'failed to get data',
                'error' => $th->getMessage()
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PartnerGroup  $partnerGroup
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerGroupRequest $request, PartnerGroup $partnerGroup)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PartnerGroup  $partnerGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartnerGroup $partnerGroup)
    {
        //
    }
}
