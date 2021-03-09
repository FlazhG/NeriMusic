<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artists;
use Session;
class ArtistsController extends Controller
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
		$servicio->descripcion_artis = $request->descripcion_artis;
		$servicio->save();
		
		/*return view('mensajes')
		->with('proceso',"Modifica de servicio")
		->with('mensaje',"El Servicio ha sido modificado")
		->with('error',1);*/
		Session::flash('mensaje',"El Artista $request->nombre_artis ha sido modificado correctamente");
		return redirect()->route('reporteartists');
	}
    public function borraartists($id_artis)
	{
		$buscaartists = artists::where('id_artis',$id_artis)->get();
		$cuantos = count($buscaartists);
		if ($cuantos==0) 
		{
			
		$artists = artists::withTrashed()->find($id_artis)->forceDelete();
		/*return view('mensajes')
		->with('proceso',"Borrar Servicio")
		->with('mensaje',"El servicio ha sido borrado correctamente")
		->with('error',1);*/
		Session::flash('mensaje',"El Artista ha sido eliminado correctamente");
		return redirect()->route('reporteartists');
		}
		else{
			/*return view('mensajes')
			->with('proceso',"Borrar Servicio")
			->with('mensaje',"El servicio no se puede eliminar, ya que tiene registros de galeria")
			->with('error',0);^*/
			Session::flash('mensaje',"El Servicio no se puede eliminar");
		return redirect()->route('reporteservicio');
		}
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
		$consulta = artists::withTrashed()->get();
		return view('reporteartists')->with('consulta', $consulta);
	}
    public function artists()
	{
			
		return view('artists');
				
	}
public function guardarartists(Request $request)
	{

		$artists = new artists;
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
		$servicio->descripcion_artis = $request->descripcion_artis;
		$servicio->save();
        Session::flash('mensaje',"El Servicio $request->artists ha sido dado de alta correctamente");
		return redirect()->route('reporteartists');
}
}