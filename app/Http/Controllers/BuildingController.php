<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function building_index()
    {
        $building = Building::all();
        return view('admin.building',['buildings' =>$building ]);
    }

    

}
