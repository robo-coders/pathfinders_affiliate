<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator_general_commission extends Model
{
    use HasFactory;
    protected $table = 'coordinator_general_commissions';
    protected $fillable = ['user_id','course_id','point','dsc','isc','gmdc','gsdc','gsrc'];
}
