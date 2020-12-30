<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_dealer_general_commission extends Model
{
    use HasFactory;
    protected $table = 'sub_dealer_general_commissions';
    protected $fillable = ['user_id','course_id','point','dsc','isc','gsrc'];
}
