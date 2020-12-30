<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class affiliateController extends Controller
{
    public function affiliateRegisteration(Request $request){
        return redirect()->route('register',['coupon_code' => $request->input('coupon_code')]);

    }

    public function slug($slug)
    {
        if(isset($slug) && $slug == 'cd') {
            $data['coupon_code']  = $_GET['coupon_code'];
            $data['slug']  = $slug;
            dd($data);
        } else if(isset($slug) && $slug == 'md'){

        }else if(isset($slug) && $slug == 'mr'){

        }
    }
}
