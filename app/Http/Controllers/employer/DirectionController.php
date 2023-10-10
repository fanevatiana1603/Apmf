<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Poste;
use App\Models\Direction;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direction = DB::table('postes')
                ->join('directions', 'postes.id_direction', '=', 'directions.id_direction')
                ->select('postes.*','directions.*')
                ->get();
        return view('employer.direction.index',[
            'direction'=>$direction,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direction = Direction::all();
        return view('employer.direction.ajout',[
            'direction'=>$direction,
        ]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direction = DB::table('postes')
                ->join('directions', 'postes.id_direction', '=', 'directions.id_direction')
                ->select('postes.*','directions.*')
                ->get();

        $reponse=Poste::create($request->all());

        if ($reponse) {
            $direction = DB::table('postes')
                ->join('directions', 'postes.id_direction', '=', 'directions.id_direction')
                ->select('postes.*','directions.*')
                ->get();

            return redirect()->route('employer.poste.index',[
                'direction'=>$direction,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function show(Poste $poste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit(Poste $poste)
    {
        $direction = Direction::all();
        return view('employer.direction.edit_poste',[
            'poste'=>$poste,
            'direction'=>$direction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poste $poste)
    {
        $poste->Direction()->sync($request->noms_direction);
        $poste->nom_poste = $request->nom_poste;
        $poste->save();

        return redirect()->route('employer.poste.index',[
            'poste'=>$poste,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poste $poste)
    {
        $poste->delete();

        return redirect()->route('employer.poste.index');
    }
}
