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
    public function modificaartists($id_artis)
	{
		$consulta = artists::withTrashed()
		->where('id_artis', $id_artis)
		->get();
		return view('modificaartists')
		->with('consulta', $consulta[0]);
	}
    public function guardacambioartists(Request $request)
	{
		$artists =artists::withTrashed()->find($request->id_artis);
		$artists->id_artis = $request->id_artis;
		$artists->nombre_artis = $request->nombre_artis;
    $artists->email_artis = $request->email_artis;
    $artists->email_verified = $request->email_verified;
    $artists->fecha_artis = $request->fecha_artis;
    $artists->sexo_artis = $request->sexo_artis;
    $artists->password_artis = $request->password_artis;
    $artists->img_artis = $request->img_artis;
    $artists->telefono_asrtis = $request->telefono_artis;
    $artists->terminos_artis = $request->terminos_artis;
    $artists->disquera_artis = $request->disquera_artis;
		$artists->descripcion_artis = $request->descripcion_artis;
		$artists->save();
		return redirect('music.report');
	}
    public function borraartists($id_artis)
	{
		$buscaartists = artists::where('id_artis',$id_artis)->get();
		$cuantos = count($buscaartists);
		if ($cuantos==0)
		{

		$artists = artists::withTrashed()->find($id_artis)->forceDelete();
		return redirect()->route('reporteartists');
		}
		else{
		return redirect()->route('reporteservicio');
		}
	}
    public function activarartists($id_artis)
		{
			$artists = artists::withTrashed()->where('id_artis',$id_artis)->restore();
		    return redirect()->route('reporteartists');
		}
    public function desactivaartists($id_artis)
	{
		$artists = artists::find($id_artis);
		$artists->delete();
		return redirect()->route('reporteartists');
	}
    public function reportmusic()
	{
		$music = Music::withTrashed()->select(
			'musics.id_music',
			'musics.nombre_music',
			'musics.id_artis',
			'musics.duracion_music',
 			'musics.id_genero',
			'musics.formato_music',
			'musics.discografica_music',
			'musics.descripcion_music',
			'musics.fecha_music',
			'musics.id_album',
			'musics.deleted_at',
			'musics.id_artis')->get();
		return view('music.report')->with('music', $music);
	}

  public function index()
  {
    $genero = Genero::all();
    return view('music.up')->with('genero',$genero);
  }

  public function savemusic(Request $request)
  	{

  		$music = new Music();
  		$music -> id_music = $request->id_music;
  		$music -> nombre_music = $request->nombre_artis;
      $music -> caratula_music = $request->caratula_music;
      $music -> duracion_music = $request->duracion_music;
      $music -> id_genero = $request->id_genero;
      $music -> formato_music = $request->formato_music;
      $music -> discografica_music = $request->discografica_music;
      $music -> descripcion_music = $request->descripcion_music;
      $music -> id_album = $request->id_album;
      $music -> formato_music = $request->formato_music;
      $music -> fecha_music = $request->fecha_music;
  		$music -> save();
  		return redirect ('music.report');
    }
}
