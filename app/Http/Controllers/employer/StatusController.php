<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;

class StatusController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = Employe::find($id);

        if ($employe) {
            if ($employe->status) {
                $employe->status = 0;
            }
            else
            {
                $employe->status = 1;
            }
            $employe->save();
        }
        return back();
    }

    


   
}
