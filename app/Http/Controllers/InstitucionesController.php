<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Models\Consultante;
use Illuminate\Support\Facades\Redirect;

class InstitucionesController extends Controller
{
    public function detalle($id)
    {
        $insti = DB::table('instituciones_oficiales')
                    ->join('imagens','instituciones_oficiales.id','imagens.institucion_id')
                    ->select('instituciones_oficiales.*','imagens.nombre as imagen')
                    ->where('instituciones_oficiales.id',$id)
                    ->first();
        $cupos = DB::table('cupos')->where('CodSede',$insti->CodSede)->get();
        return view('detalle', ['data' => $insti, 'cupos' => $cupos]);
    }

    public function barrios($id)
    {
        $barrios = DB::table('barrios')->where('comuna_id',$id)->get();

        return response::json($barrios);
    }

    public function institucionesData(Request $request)
    {
        //dd($request);
        $simat = DB::table('instituciones_oficiales')->orWhere('NomEstable', 'LIKE', '%' .$request->nombreestablecimiento. '%')
                ->Where('Grados','LIKE', '%' .$request->grado. '%')
                ->Where('Niveles','LIKE', '%' .$request->niveles. '%')
                ->Where('Tipo','LIKE', '%' .$request->tipo. '%')
                ->Where('NomSede','LIKE', '%' .$request->nombresede. '%')
                ->Where('Zona','LIKE', '%' .$request->zona. '%')
                ->join('imagens','instituciones_oficiales.id','imagens.institucion_id')
                ->select(DB::raw('instituciones_oficiales.id as id, instituciones_oficiales.NomSede as NomSede, 
                        instituciones_oficiales.Direccion as Direccion,
                        imagens.nombre as imagen,
                        (Select sum(cupos) from cupos where CodSede = instituciones_oficiales.CodSede) as totalcupos'))
                ->whereRaw('(Select sum(cupos) from cupos where CodSede = instituciones_oficiales.CodSede) <> ""')
                ->get();  
        
        return json_decode($simat);
    }
    public function instituciones()
    {
        $instituciones = DB::table('instituciones_oficiales')->join('imagens','instituciones_oficiales.id','imagens.institucion_id')
                                                ->select(DB::raw('instituciones_oficiales.* ,imagens.nombre as imagen, (Select sum(cupos) from cupos where CodSede = instituciones_oficiales.CodSede) as totalcupos'))
                                                ->whereRaw('(Select sum(cupos) from cupos where CodSede = instituciones_oficiales.CodSede) <> ""')
                                                ->get();

        return response::json($instituciones);
    }
    public function cupos($id)
    {
        $cupos = DB::table('cupos')->where('CodSede',$id)
                                ->select('jornada','grado','cupos')
                                ->get();

        return response::json($cupos);
    }
    public function consultar(Request $request)
    {
        $consultante = New Consultante();
        $consultante->nombres = $request->nombres;
        $consultante->apellidos = $request->apellidos;
        $consultante->telefono = $request->telefono;
        $consultante->correo = $request->correo;
        $consultante->comuna_id = $request->comuna;
        $consultante->barrio_id = $request->barrio;
        $consultante->nombresE = $request->nombresE;
        $consultante->apellidosE = $request->apellidosE;
        $consultante->edad = $request->edad;
        $consultante->grado = $request->grado;
        $consultante->save();


        return redirect::to('consulta');

    }   
}
