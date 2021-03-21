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
    $datos['albums'] = Album::all();
    $consulta['albums'] = Album::withTrashed()
    ->join('artists', 'albums.id_artis','=','artists.id_artis')
    ->join('generos', 'albums.id_genero','=','generos.id_genero')
    ->select(
      'albums.id_album',
      'albums.nombre_album',
      'albums.descripcion_album',
      'albums.fecha_album',
      'albums.duracion_album',
      'artists.nombre_artis',
      'generos.nombre_genero',
      'albums.deleted_at')->get();
     return view('album.report')
     ->with($datos)
     ->with($consulta);
  }

  public function create()
  {
    $generos = Genero::all();
    $artists = Artists::all();
      return view('album.up')
      ->with('genero',$generos)
      ->with('artists',$artists);
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
    $consultar = Album::join('artists', 'albums.id_artis','=','artists.id_artis')
    ->where('id_album',$id_album)->get();
    $consulta = Album::join('generos', 'albums.id_genero','=','generos.id_genero')
    ->where('id_album',$id_album)->get();
    $album = Album::findOrFail($id_album);
    return view('album.edit', compact('album'))
    ->with('genero',$generos)
    ->with('artists',$artists)
    ->with('consultar',$consultar[0])
    ->with('consulta',$consulta[0])
    ->with('album',$album);
  }

  public function update(Request $request, $id_album)
  {
    $album = Album::findOrFail($id_album);
      $datosAlbum = request()->except(['_token', '_method']);
      Album::where('id_album','=',$id_album)->update($datosAlbum);
      $datos['albums']=Album::all();
      $consulta['albums'] = Album::withTrashed()
      ->join('artists', 'albums.id_artis','=','artists.id_artis')
      ->join('generos', 'albums.id_genero','=','generos.id_genero')
      ->select(
        'albums.id_album',
        'albums.nombre_album',
        'albums.descripcion_album',
        'albums.fecha_album',
        'albums.duracion_album',
        'artists.nombre_artis',
        'generos.nombre_genero',
        'albums.deleted_at')->get();
      return view('album.report', compact('album'))->with($datos)->with($consulta);
  }

  public function destroy($id_album){
    Album::find($id_album)->forceDelete();
    return redirect('albums');
  }

   public function desactivar($id_album)
   {
     $album = Album::find($id_album);
     $album->delete();
     return redirect('albums');
   }

   public function activar($id_album)
   {
     $album = Album::withTrashed()->where('id_album',$id_album)->restore();
     return redirect('albums');
   }
}
