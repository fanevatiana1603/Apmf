<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;
use Illuminate\Support\Facades\DB;

class employeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employe = Employe::all();
        return view('employer.pers.index',[
            'employe'=>$employe,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employe = DB::table('employes')
                    ->join('postes','employes.id_poste','=','postes.id')
                    ->leftjoin('directions','postes.id_direction','=','directions.id_direction')
                    ->select('employes.*','postes.*','directions.*')
                    ->get();

        return view('employer.pers.employer_ajout',[
            'employe'=>$employe,
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
         $employe = DB::table('employes')
                    ->join('postes','employes.id_poste','=','postes.id')
                    ->leftjoin('directions','postes.id_direction','=','directions.id_direction')
                    ->select('employes.*','postes.*','directions.*')
                    ->get();

        $reponse=Employe::create($request->all());

        if ($reponse) {
            $employe = DB::table('employes')
                    ->join('postes','employes.id_poste','=','postes.id')
                    ->leftjoin('directions','postes.id_direction','=','directions.id_direction')
                    ->select('employes.*','postes.*','directions.*')
                    ->get();

            return redirect()->route('employer.employer.index',[
                'employe'=>$employe,
            ]);        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        return " ".$employe." ";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();

        return back();
    }
}
