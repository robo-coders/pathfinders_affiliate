<?php

namespace App\Http\Controllers;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\General_commission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use App\Models\Sales_rep_general_commission;
use App\Models\Sub_dealer_general_commission;
use App\Models\Coordinator_general_commission;
use App\Models\Main_dealer_general_commission;

class authController extends Controller
{
    public function signup(Request $request){
        $coupon_code = $request->coupon_code;
        // $this->validate($request, [
        //     'first_name' => 'required|min:3|max:50',
        //     'last_name' => 'required|min:3|max:50',
        //     'email' => 'email|unique:users',
        //     'password' => 'required|confirmed|min:6',
        // ]);
        $uuid = Uuid::uuid1()->toString();
        $data = $request->all();
        $user = User::create([
            'uuid' => $uuid,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        if($coupon_code !== '/' && $coupon_code !== ''){
            $previous_user = User::find($coupon_code);
            $previous_user_role = $previous_user->roles->pluck('name');
            $previous_user_role = $previous_user_role->all();
            if(in_array('coordinator',$previous_user_role)){
                $user->assignRole('main dealers');
                $general_commission = General_commission::first();
                $commission = Main_dealer_general_commission::create([
                    'user_id'   => $user->id,
                    'course_id' => $general_commission['course_id'],
                    'point'     => $general_commission['main_dealer_point'],
                    'dsc'       => $general_commission['main_dealer_dsc'],
                    'isc'       => $general_commission['main_dealer_idsc'],
                    'gsdc'      => $general_commission['main_dealer_gsdc'],
                    'gsrc'      => $general_commission['main_dealer_gsrc'],
                ]);
            }elseif(in_array('main dealers',$previous_user_role)){
                $user->assignRole('sub dealers');
                $general_commission = General_commission::first();
                $commission = Sub_dealer_general_commission::create([
                    'user_id'   => $user->id,
                    'course_id' => $general_commission['course_id'],
                    'point'     => $general_commission['sub_dealer_point'],
                    'dsc'       => $general_commission['sub_dealer_dsc'],
                    'isc'       => $general_commission['sub_dealer_idsc'],
                    'gsrc'      => $general_commission['sub_dealer_gsrc'],
                ]);
            }elseif(in_array('sub dealers',$previous_user_role)){
                $general_commission = General_commission::first();
                $commission = Sales_rep_general_commission::create([
                    'user_id'   => $user->id,
                    'course_id' => $general_commission['course_id'],
                    'point'     => $general_commission['sales_rep_point'],
                    'dsc'       => $general_commission['sales_rep_dsc'],
                    'isc'       => $general_commission['sales_rep_idsc'],
                ]);
            }else{
                // $user->assignRole('coordinator');
                // $general_commission = General_commission::first();
                // $commission = Coordinator_general_commission::create([
                //     'user_id'   => $user->id,
                //     'course_id' => $general_commission['course_id'],
                //     'point'     => $general_commission['coordinator_point'],
                //     'dsc'       => $general_commission['coordinator_dsc'],
                //     'isc'       => $general_commission['coordinator_idsc'],
                //     'gmdc'      => $general_commission['coordinator_gmdc'],
                //     'gsdc'      => $general_commission['coordinator_gsdc'],
                //     'gsrc'      => $general_commission['coordinator_gsrc'],
                // ]);
            }
        }else{
                $user->assignRole('coordinator');
                $general_commission = General_commission::first();
                $commission = Coordinator_general_commission::create([
                    'user_id'   => $user->id,
                    'course_id' => $general_commission['course_id'],
                    'point'     => $general_commission['coordinator_point'],
                    'dsc'       => $general_commission['coordinator_dsc'],
                    'isc'       => $general_commission['coordinator_idsc'],
                    'gmdc'      => $general_commission['coordinator_gmdc'],
                    'gsdc'      => $general_commission['coordinator_gsdc'],
                    'gsrc'      => $general_commission['coordinator_gsrc'],
                ]);
        }
        if($coupon_code !== ''){
            $manager = User::find($coupon_code);
            $user->managers()->attach($manager);
        }else{
            
        }
        Auth::login($user);
        return redirect('/dashboard');
    }
    
}