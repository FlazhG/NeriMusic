<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Genero;
use App\Models\artists;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
  public function album()
  {
    $genero = Genero::all();
    $consulta = artists::join('musics', 'artists.id_artis','=','musics.id_artis')
    ->select('musics.nombre_music')->get();
      return view('album.up')->with('genero',$genero)->with('consulta',$consulta);
  }
  public function home()
  {
      return view('welcome');
  }
  public function report()
  {
    $album = Album::withTrashed()->select(
      'usuarios.id_album',
      'usuarios.',
      'usuarios.',
      'usuarios.',
      'usuarios.',
      'usuarios.',
      'usuarios.',
      'usuarios.',
      'usuarios.deleted_at',
      'usuarios.')->get();
    return view('album.report')->with('album',$album);
  }
  public function save(Request $request)
  {
    $this->validate($request,[
      'nombre_album' => 'required',
      'descripcion_album' => 'required',
      'fecha_album' => 'required',
      'duracion_album' => 'required',
      'cantipistas_album' => 'required',
      'id_genero' => 'required',
    ]);
    $album = new Album();
    $album -> nombre_album = $request->nombre_album;
    $album -> img_album = $request->img_album;
    $album -> descripcion_album = $request->descripcion_album;
    $album -> fecha_album = $request->fecha_album;
    $album -> duracion_album = $request->duracion_album;
    $album -> cantipistas_album = $request->cantipistas_album;
    $album -> id_genero = $request->id_genero;
    $album -> save();
    return redirect('album.up');
  }
  public function edit($id_album){
    $album = Album::select(
      'albums.nombre_album',
      'albums.',
      'albums.',
      'albums.',
      'albums.',
      'albums.',
      'albums.')->where('id_album',$id_album)->get();
      return view('album.edit')->with('album', $album_[0]);
   }
   public function update(Request $request){
     $this->validate($request,[
       'nombre_album' => 'required',
       'descripcion_album' => 'required',
       'fecha_album' => 'required',
       'duracion_album' => 'required',
       'cantipistas_album' => 'required',
       'id_genero' => 'required',
     ]);
     $album = Album::find($request->id);
     $album -> nombre_album = $request->nombre_album;
     $album -> img_album = $request->img_album;
     $album -> descripcion_album = $request->descripcion_album;
     $album -> fecha_album = $request->fecha_album;
     $album -> duracion_album = $request->duracion_album;
     $album -> cantipistas_album = $request->cantipistas_album;
     $album -> id_genero = $request->id_genero;
     $album -> save();
     return redirect('album.edit');
   }
   public function desactivar($id_album)
   {
     $album = Album::find($id_album);
     $album->delete();
     return view('album.report');
   }
   public function activar($id_album)
   {
     $album = Album::withTrashed()->where('id_album',$id_album)->restore();
     return view('album.report');
   }
   public function destroy($id_album){
     $album = Album::find($id_album)->forceDelete();
     return view('album.report');
   }
}
