<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Open extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'c_id';
    public $timestamps = false;
    protected $guarded = [];//黑名单
}
