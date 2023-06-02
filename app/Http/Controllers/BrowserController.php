<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Browser;

class BrowserController extends Controller
{
  public function index()
  {
    $browsers = Browser::all();

    $points = [];
    foreach ($browsers as $browser) {
      $points[] = ['name' => $browser['name'], 'y' => floatval($browser['percentage'])];
    }

    // json_encode se usa para convertir una variable php a su representacion en json
    return view('charts', ['data' => json_encode($points)]);
  }
}