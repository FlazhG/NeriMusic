<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Genero;
use App\Models\artists;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
  public function index()
  {
    $datos['albums']=Album::paginate(100);
    // $datos['albums']=Album::withTrashed()->select('albums.deleted_at')
    // ->union()->paginate(100)->get();
     return view('album.report',$datos);
  }

  public function create()
  {
    $generos = Genero::all();
    $artists = Artists::all();
    $consulta = artists::join('musics', 'artists.id_artis','=','musics.id_artis')
    ->select('musics.nombre_music','artists.nombre_artis')->get();
      return view('album.up')
      ->with('genero',$generos)
      ->with('artists',$artists)
      ->with('consulta',$consulta);
  }

  public function store(Request $request)
  {
     $datosAlbum = request()->except('_token');
     Album::insert($datosAlbum);
     return redirect('albums');

  }

  public function show($id)
  {
      //
  }

  public function home()
  {
    return view('welcome');
  }

  public function edit($id_album)
  {
    $generos = Genero::all();
    $artists = Artists::all();
    $consulta = artists::join('musics', 'artists.id_artis','=','musics.id_artis')
    ->select('musics.nombre_music','artists.nombre_artis')->get();
    $album = Album::findOrFail($id_album);
    return view('album.edit', compact('album'))
    ->with('genero',$generos)
    ->with('artists',$artists)
    ->with('consulta',$consulta)
    ->with('album',$album);
  }

  public function update(Request $request, $id_album)
  {
      $datosAlbum = request()->except(['_token', '_method']);
      Album::where('id_album','=',$id_album)->update($datosAlbum);
      $album = Album::findOrFail($id_album);
      $datos['albums']=Album::paginate(100);
      return view('album.report', compact('album'),$datos);
  }

  public function destroy($id_album){
    Album::find($id_album)->forceDelete();
    return redirect('albums');
  }

   public function desactivar($id_album)
   {
     $album = Album::find($id_album);
     $album->delete();
     return redirect('report');
   }

   public function activar($id_album)
   {
     $album = Album::withTrashed()->where('id_album',$id_album)->restore();
     return redirect('report');
   }
}
