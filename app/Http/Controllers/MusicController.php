<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\artists;
use App\Models\Music;
use App\Models\Genero;
use Illuminate\Support\Facades\Validator;

class MusicController extends Controller
{
    public function index()
  {
    $datos['musics']=Music::paginate(100);
    // $datos['albums']=Album::withTrashed()->select('albums.deleted_at')
    // ->union()->paginate(100)->get();
     return view('music.report',$datos);
  }

  public function create()
  {
    $generos = Genero::all();
    $consulta = artists::join('musics', 'artists.id_artis','=','musics.id_artis')
    ->select('musics.nombre_music','artists.nombre_artis')->get();
      return view('music.up')
      ->with('genero',$generos)
      ->with('consulta',$consulta);
  }

  public function store(Request $request)
  {
     $datosMusic = request()->except('_token');
     Music::insert($datosMusic);
     return redirect('musics');

  }

  public function show($id)
  {
      //
  }

  public function home()
  {
    return view('welcome');
  }

  public function edit($id_music)
  {
    $generos = Genero::all();
    $consulta = artists::join('musics', 'artists.id_artis','=','musics.id_artis')
    ->select('musics.formato_music')->get();
    $music = Music::findOrFail($id_music);
    return view('music.edit', compact('music'))
    ->with('genero',$generos)
    ->with('consulta',$consulta)
    ->with('music',$music);
  }

  public function update(Request $request, $id_music)
  {
      $datosMusic = request()->except(['_token', '_method']);
      Music::where('id_music','=',$id_music)->update($datosMusic);
      $music = Music::findOrFail($id_music);
      $datos['musics']=Music::paginate(100);
      return view('music.report', compact('music'),$datos);
  }

  public function destroy($id_music){
    Music::find($id_music)->forceDelete();
    return redirect('musics');
  }

   public function desactivar($id_music)
   {
     $music = Music::find($id_music);
     $music->delete();
     return redirect('report');
   }

   public function activar($id_music)
   {
     $music = Music::withTrashed()->where('id_album',$id_music)->restore();
     return redirect('report');
   }
}
