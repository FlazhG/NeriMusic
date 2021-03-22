<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artists;
use Illuminate\Support\Facades\Validator;

class ArtistsController extends Controller
{
    public function index()

	{
		$datos['artists'] = Artists::all();
		$consulta['artists'] = Artists::withTrashed()->
		select(
			'artists.id_artis',
			'artists.nombre_artis',
			'artists.apellido_artis',
			'artists.email_artis',
			'artists.email_verified',
			'artists.fecha_artis',
			'artists.sexo_artis',
			'artists.password_artis',
			'artists.img_artis',
			'artists.telefono_artis',
			'artists.terminos_artis',
			'artists.disquera_artis',
      'artists.deleted_at',
			'artists.descripcion_artis')->get();


		return view('artist.index')->with($datos)->with($consulta);
	}
    public function create()
	{
        return view('artist.create');
	}

	public function store(Request $request)

	{

		$datosArtists = request()->except('_token');
		Artists::insert($datosArtists);

		return redirect('artists');


		}

    public function show($id)
		{
		//
		}
    public function home()
	{
		return view('welcome');
	}

	public function edit($id_artis)
	{
		$artist = Artists::findOrFail($id_artis);
		return view('artist.edit', compact('artist'))->with('artist',$artist);

	}

	public function update(Request $request, $id_artis)

	{
		$artist = Artists::findOrFail($id_artis);
		$datosArtists = request()->except(['_token', '_method']);
		Artists::where('id_artis','=',$id_artis)->update($datosArtists);
	    $datos['artists']=Artists::all();
		$consulta['artist'] = Artists::withTrashed()->get();
		return view('artist.index', compact('artist'))->with($datos)->with($consulta);

	}

	    public function destroy($id_artis){
        Artists::find($id_artis)->forceDelete();
		return redirect('artist');
	}

	public function desactivar($id_artis)
	{
		$artist = Artists::find($id_artis);
		$artist->delete();
	    return redirect('artists');
	}

    public function activar($id_artis)
	{
		$artist = Artists::withTrashed()->where('id_artis',$id_artis)->restore();
		return redirect('artists');
	}
}
