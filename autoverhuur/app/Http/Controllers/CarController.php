<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use GuzzleHttp\Promise\Create;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $leenautos = Car::all();
      return view('index', ['leenautos' => $leenautos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $auto = new Car;
        $merk = $request->merk;
        $type = $request->type;
        $bouwjaar = $request->bouwjaar;
        $auto->merk = $merk;
        $auto->type = $type;
        $auto->bouwjaar = $bouwjaar;
        $auto->save();
        return redirect('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($autonummer)
    {
        $auto = Car::find($autonummer);
        return view('edit', compact( 'auto' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $autonummer)
    {
        $auto = Car::find($autonummer);
        $merk = $request->merk;
        $type = $request->type;
        $bouwjaar = $request->bouwjaar;
        $auto->merk = $merk;
        $auto->type = $type;
        $auto->bouwjaar = $bouwjaar;
        $auto->update();
        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($autonummer)
    {
        $auto = Car::find($autonummer);
        $auto->delete();

        return redirect('index');
    }
}
