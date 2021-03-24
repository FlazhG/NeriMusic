<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\artists;
use App\Models\Genero;
use App\Models\Music;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MusicController extends Controller
{
    public function index()
  {
    $datos['musics']=Music::all();
    $consulta['musics'] = Music::withTrashed()
    ->join('artists', 'musics.id_artis','=','artists.id_artis')
    ->join('generos', 'musics.id_genero','=','generos.id_genero')
    ->join('albums', 'musics.id_album','=','albums.id_album')
    ->select(
      'musics.caratula_music',
      'musics.id_music',
      'musics.nombre_music',
      'artists.nombre_artis',
      'musics.discografica_music',
      'musics.formato_music',
      'musics.descripcion_music',
      'musics.duracion_music',
      'musics.fecha_music',
      'generos.nombre_genero',
      'albums.nombre_album',
      'musics.deleted_at')->get();
     return view('music.report')->with($datos)->with($consulta);
  }

  public function create()
  {
    $generos = Genero::all();
    $artists = Artists::all();
    $albums = Album::all();
      return view('music.up')
      ->with('generos',$generos)
      ->with('artists',$artists)
      ->with('albums',$albums);
  }

  public function store(Request $request)
  {
     $datosMusic = request()->except('_token');
     if ($request->hasFile('caratula_music')) {
       $datosMusic['caratula_music']=$request->file('caratula_music')->store('img/music','public');
     }
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
    $artists = Artists::all();
    $albums = Album::all();
    $consulta = Music::join('generos', 'musics.id_genero','=','generos.id_genero')
    ->where('id_music',$id_music)->get();
    $consultar = Music::join('artists', 'musics.id_artis','=','artists.id_artis')
    ->where('id_music',$id_music)->get();
    $consulti = Music::join('albums', 'musics.id_album','=','albums.id_album')
    ->where('id_music',$id_music)->get();
    $music = Music::findOrFail($id_music);
    return view('music.edit', compact('music'))
    ->with('generos',$generos)
    ->with('artists',$artists)
    ->with('albums',$albums)
    ->with('consulta',$consulta[0])
    ->with('consultar',$consultar[0])
    ->with('consulti',$consulti[0])
    ->with('music',$music);
  }

  public function update(Request $request, $id_music)
  {
      $datosMusic = request()->except(['_token', '_method']);
      if ($request->hasFile('caratula_music')) {
        $music = Music::findOrFail($id_music);
        Storage::delete('public/'.$music->caratula_music);
        $datosMusic['caratula_music']=$request->file('caratula_music')->store('img/music','public');
      }
      Music::where('id_music','=',$id_music)->update($datosMusic);
      $music = Music::findOrFail($id_music);
      $datos['musics']=Music::all();
      $consulta['musics'] = Music::withTrashed()
      ->join('artists', 'musics.id_artis','=','artists.id_artis')
      ->join('generos', 'musics.id_genero','=','generos.id_genero')
      ->join('albums', 'musics.id_album','=','albums.id_album')
      ->select(
        'musics.caratula_music',
        'musics.id_music',
        'musics.nombre_music',
        'artists.nombre_artis',
        'musics.discografica_music',
        'musics.formato_music',
        'musics.descripcion_music',
        'musics.duracion_music',
        'musics.fecha_music',
        'generos.nombre_genero',
        'albums.nombre_album',
        'musics.deleted_at')->get();
      return view('music.report', compact('music'))->with($datos)->with($consulta);
  }

  public function destroy($id_music){
    $music = Music::findOrFail($id_music);
    if (Storage::delete('public/'.$music->caratula_music)) {
      Music::find($id_music)->forceDelete();
    }
    return redirect('musics');
  }

   public function desactivar($id_music)
   {
     $music = Music::find($id_music);
     $music->delete();
     return redirect('musics');
   }

   public function activar($id_music)
   {
     $music = Music::withTrashed()->where('id_music',$id_music)->restore();
     return redirect('musics');
   }
}
