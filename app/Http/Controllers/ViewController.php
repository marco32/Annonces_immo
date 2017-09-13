<?php

namespace App\Http\Controllers;

use App\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ViewController extends Controller
{
    public function getAll()
    {
        $view= View::orderby('created_at')->get();
        return view('annonce', ['view'=> $view]);
    }
    public function getSold()
    {
        $view= View::where('fk_categorie',1)->get();
        
        return view('annonce', ['view'=> $view]);
    }
    public function getRent()
    {
        $view= View::where('fk_categorie',2)->get();
        
        return view('annonce', ['view'=> $view]);
    }
    public function getDetail($id)
    {
        $view= View::join('Cat', 'Annonce.fk_Categorie', '=', 'Cat.id')
                    ->join('Type', 'Annonce.fk_Type', '=', 'Type.id')
                    ->where('Annonce.id',$id)
                    ->get();
        return view('detail', ['view'=> $view]);
    }
}
