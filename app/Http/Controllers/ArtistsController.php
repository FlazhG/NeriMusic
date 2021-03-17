<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artists;
use Illuminate\Support\Facades\Validator;

class ArtistsController extends Controller
{
    public function modificaartists($id_artis)
	{
		$artists = Artists::withTrashed()->where('id_artis', $id_artis)->get();
		return view('artist.edit')->with('artists', $artists[0]);





	}
    public function guardacambioartists(Request $request, Artists $artists)
	{
		$artists->nombre_artis = $request->nombre_artis;
		$artists->apellido_artis = $request->apellido_artis;
		$artists->email_artis = $request->email_artis;
		$artists->email_verified = $request->email_verified;
		$artists->fecha_artis = $request->fecha_artis;
		$artists->sexo_artis = $request->sexo_artis;
		$artists->password_artis = $request->password_artis;
		$artists->telefono_artis = $request->telefono_artis;
		$artists->terminos_artis = $request->terminos_artis;
		$artists->disquera_artis = $request->disquera_artis;
		$artists->descripcion_artis = $request->descripcion_artis;

		$artists -> save();
		return redirect('/report');



	}
    public function borraartists($id_artis)
	{

		$artists = Artists::find($id_artis)->forceDelete();
        return redirect('reporteartists');

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
    public function reporteartists()
	{
		$consulta = artists::withTrashed()->select(
			'artists.id_artis',
			'artists.nombre_artis',
			// 'albums.img_album',
			'artists.apellido_artis',
			'artists.email_artis',
			'artists.fecha_artis',
			'artists.sexo_artis',
			'artists.telefono_artis',
			'artists.disquera_artis',
			'artists.descripcion_artis',
			'artists.deleted_at')->get();
		  return view('artist.report')->with('consulta',$consulta);
	}
    public function artists()
	{

		return view('artist.up');

	}
public function guardarartists(Request $request)
	{

		$artists = new artists();
		$artists -> id_artis = $request->id_artis;
		$artists -> nombre_artis = $request->nombre_artis;
        $artists -> apellido_artis = $request->apellido_artis;
        $artists -> email_artis = $request->email_artis;
        $artists -> email_verified = $request->email_verified;
        $artists -> fecha_artis = $request->fecha_artis;
        $artists -> sexo_artis = $request->sexo_artis;
        $artists -> password_artis = $request->password_artis;
       // $artists -> img_artis = $request->img_artis;
        $artists -> telefono_artis = $request->telefono_artis;
        $artists -> terminos_artis = $request->terminos_artis;
        $artists -> disquera_artis = $request->disquera_artis;
		$artists -> descripcion_artis = $request->descripcion_artis;
		$artists -> save();
		return redirect('/report');
}
}
