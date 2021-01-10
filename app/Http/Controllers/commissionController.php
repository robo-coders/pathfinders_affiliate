<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\General_commission;

class commissionController extends Controller
{
    public function saveGeneralCommission(Request $request)
    {
        $commissionRecordId = '1';
        $data = $request->all();
        $model = General_commission::all();
        if($model->isEmpty()){
             $commission = General_commission::create([
                'coordinator_point' => $data['coordinator_point'],
                'coordinator_dsc'   => $data['coordinator_direct_sale_commission'],
                'coordinator_idsc'  => $data['coordinator_inter_sale_commission'],
                'coordinator_gmdc'  => $data['coordinator_main_dealer_commission'],
                'coordinator_gsdc'  => $data['coordinator_sub_dealer_commission'],
                'coordinator_gsrc'  => $data['coordinator_sales_rep_commission'],
                'main_dealer_point' => $data['main_dealer_point'],
                'main_dealer_dsc'   => $data['main_dealer_direct_sale_commission'],
                'main_dealer_idsc'  => $data['main_dealer_inter_sale_commission'],
                'main_dealer_gsdc'  => $data['main_dealer_sub_dealer_commission'],
                'main_dealer_gsrc'  => $data['main_dealer_sales_rep_commission'],
                'sub_dealer_point'  => $data['sub_dealer_point'],
                'sub_dealer_dsc'    => $data['sub_dealer_direct_sale_commission'],
                'sub_dealer_idsc'   => $data['sub_dealer_inter_sale_commission'],
                'sub_dealer_gsrc'   => $data['sub_dealer_sales_rep_commission'],
                'sales_rep_point'   => $data['sales_rep_point'],
                'sales_rep_dsc'     => $data['sales_rep_direct_sale_commission'],
                'sales_rep_idsc'    => $data['sales_rep_inter_sale_commission'],
            ]);
        }else{
            $affected = DB::table('general_commissions')
            ->where('id', $commissionRecordId)
            ->update([
                'coordinator_point' => $data['coordinator_point'],
                'coordinator_dsc'   => $data['coordinator_direct_sale_commission'],
                'coordinator_idsc'  => $data['coordinator_inter_sale_commission'],
                'coordinator_gmdc'  => $data['coordinator_main_dealer_commission'],
                'coordinator_gsdc'  => $data['coordinator_sub_dealer_commission'],
                'coordinator_gsrc'  => $data['coordinator_sales_rep_commission'],
                'main_dealer_point' => $data['main_dealer_point'],
                'main_dealer_dsc'   => $data['main_dealer_direct_sale_commission'],
                'main_dealer_idsc'  => $data['main_dealer_inter_sale_commission'],
                'main_dealer_gsdc'  => $data['main_dealer_sub_dealer_commission'],
                'main_dealer_gsrc'  => $data['main_dealer_sales_rep_commission'],
                'sub_dealer_point'  => $data['sub_dealer_point'],
                'sub_dealer_dsc'    => $data['sub_dealer_direct_sale_commission'],
                'sub_dealer_idsc'   => $data['sub_dealer_inter_sale_commission'],
                'sub_dealer_gsrc'   => $data['sub_dealer_sales_rep_commission'],
                'sales_rep_point'   => $data['sales_rep_point'],
                'sales_rep_dsc'     => $data['sales_rep_direct_sale_commission'],
                'sales_rep_idsc'    => $data['sales_rep_inter_sale_commission'],
                ]);
            }
            $response = DB::table('general_commissions')
            ->where('id', $commissionRecordId)->first();
            return response()->json([
                'statusCode' => 200,
                'data' => $response,
                "hasError" => false,
                "message" => [
                    "title" => "General Commissions",
                    "content" => "update successfully"
                    ]
            ]);
        }
        public function getGeneralCommissions(Request $request)
        {
            $data = General_commission::first();
            return $data;
        }
}
