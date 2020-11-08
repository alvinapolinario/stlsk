<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutletModel extends Model
{
    protected $table = 'outlet_table';
    protected $fillable = ['outlet_location','coordinator_id','s2win','s3win'];

    
}
