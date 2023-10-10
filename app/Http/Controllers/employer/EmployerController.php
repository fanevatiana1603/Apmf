<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;
use Illuminate\Support\Facades\DB;

class EmployerController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = DB::table('employes')
                    ->join('postes','employes.id_poste','=','postes.id')
                    ->leftjoin('directions','postes.id_direction','=','directions.id_direction')
                    ->where('employes.id','=',$id)
                    ->select('employes.*','postes.*','directions.*')
                    ->first();


        return view('employer.pers.employer_profil',[
            'employe'=>$employe,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe  $employer)
    {
        

        $employer->img = $request->input('img');
        $employer->nom = $request->input('nom');
        $employer->prenom = $request->input('prenom');
        $employer->matriculation = $request->input('matriculation');
        $employer->email = $request->input('email');
        $employer->contact = $request->input('contact');

        $employer->save();


        return back();
    }

    
    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe = $employe->delete();

        if ($employe) {
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
}
