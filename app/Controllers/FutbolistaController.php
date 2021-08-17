<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FutbolistaModel;

class FutbolistaController extends Controller{
    
    public function index(){

        $myFutbolista = new FutbolistaModel();
        $data['futbolista'] = $myFutbolista -> orderBy('idFutbolista', 'ASC') -> findAll();

        return view('futbolistaView');

    }

}