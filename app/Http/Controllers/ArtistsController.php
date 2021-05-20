<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artists;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Dompdf\Adapter\PDFLib;
Use PDF;

class ArtistsController extends Controller
{
    public function index()

	{
		$datos['artists'] = artists::all();
		$consulta['artists'] = artists::withTrashed()->
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
    if ($request->hasFile('img_artis')) {
      $datosArtists['img_artis']=$request->file('img_artis')->store('img/artist','public');
    }
		artists::insert($datosArtists);

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
		$artist = artists::findOrFail($id_artis);
		return view('artist.edit', compact('artist'))->with('artist',$artist);

	}

	public function update(Request $request, $id_artis)

	{
		$datosArtists = request()->except(['_token', '_method']);
    if ($request->hasFile('img_artis')) {
      $artist = artists::findOrFail($id_artis);
      Storage::delete('public/'.$artist->img_artis);
      $datosArtists['img_artis']=$request->file('img_artis')->store('img/artist','public');
    }
	    artists::where('id_artis','=',$id_artis)->update($datosArtists);
      $artist = artists::findOrFail($id_artis);
	    $datos['artists']=artists::all();
      $consulta['artists'] = artists::withTrashed()->
  		select(
        'artists.img_artis',
  			'artists.id_artis',
  			'artists.nombre_artis',
  			'artists.apellido_artis',
  			'artists.email_artis',
  			'artists.email_verified',
  			'artists.fecha_artis',
  			'artists.sexo_artis',
  			'artists.password_artis',
  			'artists.telefono_artis',
  			'artists.terminos_artis',
  			'artists.disquera_artis',
        'artists.deleted_at',
  			'artists.descripcion_artis')->get();
		return view('artist.index', compact('artist'))->with($datos)->with($consulta);

	}

	    public function destroy($id_artis){
        $artist = artists::findOrFail($id_artis);
        if (Storage::delete('public/'.$artist->img_artis)) {
          artists::find($id_artis)->forceDelete();
        }
		return redirect('artists');

		}
	public function desactivar($id_artis)
	{
		$artist = artists::find($id_artis);
		$artist->delete();
	    return redirect('artists');
	}

    public function activar($id_artis)
	{
		$artist = artists::withTrashed()->where('id_artis',$id_artis)->restore();
		return redirect('artists');
	}

  public function gePdfartis(){
    $pdfartis = artists::all();
    $pdf = PDF::loadView('artist.pdf', compact('pdfartis'));
        return $pdf->download('pdf_artis.pdf');
}
}
