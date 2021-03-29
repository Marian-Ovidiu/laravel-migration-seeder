<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Elettrodomestico;

class controllerElettroApi extends Controller
{
    public function viewFirst() {

        $elettro = Elettrodomestico::orderBy('id', 'asc')->first();

        return response()->json($elettro);

    }

}
