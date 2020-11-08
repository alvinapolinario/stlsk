<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OutletModel;
class OutletController extends Controller
{
    public function outlet(){
    	return response()->json(OutletModel::get(), 200);
    }
}
