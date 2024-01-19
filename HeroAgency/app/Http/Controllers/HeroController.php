<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::all();
        return response()->json($hero);
    }

    public function store(Request $request)
    {
        $hero = new Hero;
        $hero->name = $request->name;
        $hero->secret_identity = $request->secret_identity;
        $hero->gender = $request->gender;
        $hero->hair_color = $request->hair_color;
        $hero->original_planet = $request->original_planet;
        $hero->save();
        return response()->json([
            "message" => "Hero Added."
        ], 201);
    }

    public function show($id)
    {
        $hero = Hero::find($id);
        if (!empty($hero)) {
            return response()->json($hero);
        } else {
            return response()->json([
                "message" => "Hero not found."
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if (Hero::where('id', $id)->exists()) {
            $hero = Hero::find($id);
            $hero->name = is_null($request->name) ? $hero->name : $request->name;
            $hero->secret_identity = is_null($request->secret_identity) ? $hero->secret_identity : $request->secret_identity;
            $hero->gender = is_null($request->gender) ? $hero->gender : $request->gender;
            $hero->hair_color = is_null($request->hair_color) ? $hero->hair_color : $request->hair_color;
            $hero->original_planet = is_null($request->original_planet) ? $hero->original_planet : $request->original_planet;
            $hero->save();
            return response()->json([
                "message" => "Hero updated."
            ], 404);
        } else {
            return response()->json([
                "message" => "Hero not found."
            ], 404);
        }
    }

    public function destroy($id)
    {
        if (Hero::where('id', $id)->exists()) {
            $hero = Hero::find($id);
            $hero->delete();

            return response()->json([
                "message" => "records deleted."
            ], 202);
        } else {
            return response()->json([
                "message" => "Hero not found."
            ], 404);
        }
    }
}
