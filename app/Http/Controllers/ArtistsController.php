<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artists;
use Session;

class ArtistsController extends Controller
{
    public function modificaartists($id_artis)
	{
		$consulta = artists::withTrashed()
		->where('id_artis', $id_artis)
		->get();
		return view('artist.edit')
		->with('consulta', $consulta[0]);
	}
    public function guardacambioartists(Request $request)
	{
		$this->validate($request,[
			'nombre_artis' => 'required',
			'email_artis' => 'required',
			'email_verifed' => 'required',
			'fecha_artis' => 'required',
			'sexo_artis' => 'required',
			'password_artis' => 'required',
			'telefono_artis' => 'required',
			'terminos_artis' => 'required',
			'disquera_artis' => 'required',
			'descripcion_artis' => 'required',


		]);

		$artists = new artists();
		$artists->id_artis = $request->id_artis;
		$artists->nombre_artis = $request->nombre_artis;
        $artists->email_artis = $request->email_artis;
        $artists->email_verified = $request->email_verified;
        $artists->fecha_artis = $request->fecha_artis;
        $artists->sexo_artis = $request->sexo_artis;
        $artists->password_artis = $request->password_artis;
        //$artists->img_artis = $request->img_artis;
        $artists->telefono_artis = $request->telefono_artis;
        $artists->terminos_artis = $request->terminos_artis;
        $artists->disquera_artis = $request->disquera_artis;
		$artists->descripcion_artis = $request->descripcion_artis;
		$artists->save();

	
		return redirect('artists.report');
	}
    public function borraartists($id_artis)
	{
		
		Artists::find($id_artis)->forceDelete();
        return redirect('/reporteartists');

		}
			
    public function activarartists($id_artis)
		{
			$artists = artists::withTrashed()->where('id_artis',$id_artis)->restore();
			/*return view('mensajes')
			->with('proceso',"Ativar Servicio")
			->with('mensaje',"El servicio ha sido activado correctamente")
			->with('error',1);*/
			Session::flash('mensaje',"El Artista ha sido activado correctamente");
		return redirect()->route('reporteartists');
		}
    public function desactivaartists($id_artis)
	{
		$artists = artists::find($id_artis);
		$artists->delete();
		/*return view('mensajes')
		->with('proceso',"Desactivar Servicio")
		->with('mensaje',"El servicio ha sido desactivado correctamente")
		->with('error',1);*/
		Session::flash('mensaje',"El Artista ha sido desactivado correctamente");
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
			'artists.email_verified',
			'artists.fecha_artis',
			'artists.sexo_artis',
			'artists.password_artis',
			'artists.telefono_artis',
			'artists.terminos_artis',
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
		return redirect('artists.report');
}
}
