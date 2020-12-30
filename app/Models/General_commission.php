<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_commission extends Model
{
    use HasFactory;
    protected $table = 'general_commissions';
    protected $fillable = ['id','course_id','coordinator_point','coordinator_dsc','coordinator_idsc','coordinator_gmdc','coordinator_gmdc','coordinator_gsdc',
    'coordinator_gsrc','main_dealer_point','main_dealer_dsc','main_dealer_idsc','main_dealer_gsdc','main_dealer_gsrc',
    'sub_dealer_point', 'sub_dealer_dsc', 'sub_dealer_idsc', 'sub_dealer_gsrc',
    'sales_rep_point', 'sales_rep_dsc', 'sales_rep_idsc'
    ];
}
