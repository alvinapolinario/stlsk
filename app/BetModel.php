<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BetModel extends Model
{
    protected $table = 'bets';
    protected $fillable = 
    [
    	'bet_id',
    	'bet_num',
    	'bet_amount',
    	'win_amount',
    	'draw_code',
    	'receipt_id',
    	'draw_id',
    	'outlet_id',
    	'created_date',
    	'created_time',
    	'voided',
    	'outlet_location',
    	'coordinator_id',
    	
    ];

}
