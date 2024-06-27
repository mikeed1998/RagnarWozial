<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitacion;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CapacitacionController extends Controller
{
    public function index() {

    }

    public function store(Request $request) {
        $capacitacion = new Capacitacion;

        $file_capacitacion = $request->file('icono');

        $extension_capacitacion = $file_capacitacion->getClientOriginalExtension();
        $namefile_capacitacion = Str::random(30) . '.' . $extension_capacitacion;

        \Storage::disk('local')->put("img/photos/capacitaciones/" . $namefile_capacitacion, \File::get($file_capacitacion));

        $capacitacion->texto = $request->texto;
        $capacitacion->icono = $namefile_capacitacion;

        $capacitacion->save();

        \Toastr::success('Capacitación añadida');
        return redirect()->route('seccion.show', ['slug' => 'capacitacion']);
    }

    public function update(Request $request, Capacitacion $capacitacion) {

    }

    public function destroy(Capacitacion $capacitacion) {

    }
}
