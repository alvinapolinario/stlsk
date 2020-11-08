<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BetModel;

class BetController extends Controller
{
        public function bet(){
    	return response()->json(BetModel::get(), 200);
}
}