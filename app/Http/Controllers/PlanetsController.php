<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planet;

class PlanetsController extends Controller
{
  public function index()
  {
      return Planet::all();
  }

  public function show(Planet $planet)
  {
      return $planet;
  }

  public function store(Request $request)
  {
      $planet = Planet::create($request->all());

      return response()->json($product, 201);
  }

  public function update(Request $request, Planet $planet)
  {
      $planet->update($request->all());

      return response()->json($planet, 200);
  }

  public function delete(Planet $planet)
  {
      $planet->delete();

      return response()->json(null, 204);
  }//
}
