<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Employe;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $actif = DB::table('employes')
                ->where('status','=',1)
                ->count();

        $desactif = DB::table('employes')
                ->where('status','=',0)
                ->count();


        $employe = Employe::count();

        $users = User::count();
        
        return view('home',[
            'employe'=>$employe,
            'users'=>$users,
            'actif'=>$actif,
            'desactif'=>$desactif,
        ]);
    }
}
