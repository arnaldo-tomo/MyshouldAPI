<?php

namespace App\Http\Controllers;

use App\Models\Shoulcontroller as ModelsShoulcontroller;
use Illuminate\Http\Request;

class Shoulcontroller extends Controller
{


    public function POSTShoul(Request $request)
    {
        $should = new ModelsShoulcontroller();
        $should->Should = $request->inputShould;
        $should->descrypt = $request->descrypt;
        $should->save();
        if ($should) {
            return response()->json([
                'message' => "Should Posted in sucessulfy"
            ]);
        } else {
            return response()->json([
                'message' => "Error qualquer coisa deu errado"
            ]);
        }
    }

    public function GetAllShould()
    {
        $should = ModelsShoulcontroller::all();
        if ($should) {
            return response()->json([
                'should' => $should,
                'message' => "sucessulfy",
            ]);
        } else {
            return response()->json([
                'message' => "Sem Nehum Retorno"
            ]);
        }
    }
}