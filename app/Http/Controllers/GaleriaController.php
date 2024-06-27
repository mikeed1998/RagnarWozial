<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Galeria;

class GaleriaController extends Controller
{
    public function store(Request $request) {
        // dd('llegue');
        $galeria = new Galeria;

        $file_galeria = $request->file('imagen');

        $extension_galeria = $file_galeria->getClientOriginalExtension();
        $namefile_galeria = Str::random(30) . '.' . $extension_galeria;

        \Storage::disk('local')->put("img/photos/galerias/" . $namefile_galeria, \File::get($file_galeria));

        $galeria->imagen = $namefile_galeria;

        $galeria->save();

        \Toastr::success('Imágen añadida');
        return redirect()->route('seccion.show', ['slug' => 'galeria']);
    }

    public function destroy(Galeria $galeria) {
        $img = 'img/photos/galerias/'.$galeria->imagen;
        unlink($img);
        $galeria->delete();
        \Toastr::success('Imágen eliminada');
        return redirect()->back();
    }
}
