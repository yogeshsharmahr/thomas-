<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees_structure extends Model
{
    protected $table='fees_structures';
    protected $fillable = [
        'class_id', 'year', 'month','tution_fee','exam_fee','transport_fee','hostel_fee','libray_fee','event_fee','extra_cur_act_fee','other','totassl',
    ];
}
