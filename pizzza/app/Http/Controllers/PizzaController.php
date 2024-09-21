<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;

class PizzaController extends Controller
{
        public function akcios(){
            return view('welcome',[
                'result'=> pizza::where('akcios',1)
                                    ->get()
            ]);
        }

        public function adatlap($id){
            return view('adatlap',[
                'result'=> pizza::find($id)
            ]);
        }
        public function all(){
            return view('all',[
                'result' => pizza::all()
            ]);
        }
}
