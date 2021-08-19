<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FutbolistaModel;

class FutbolistaController extends Controller{
    
    public function index(){

        $myFutbolista = new FutbolistaModel();
        $data['futbolista'] = $myFutbolista -> orderBy('idFutbolista', 'ASC') -> findAll();
       
        $data['header'] = view('templates/headerTemplate');
        $data['footer'] = view('templates/footerTemplate');

        return view('futbolistaView', $data);

    }

    public function insert(){

        $data['header'] = view('templates/headerTemplate');
        $data['footer'] = view('templates/footerTemplate');

        return view('insertFutbolistaView', $data);

    }

    public function save(){

        $request = \Config\Services::request();
        $myFutbolista = new FutbolistaModel();


        $data=[
            'nombreFutbolista' => $request->getVar('nameFootballer'),
            'edad' => $request->getVar('ageFootballer'),
            'altura' => $request->getVar('heightFootballer'),   
            'pieHabil' => $request->getVar('skillfulLeg'),
            'nacionalidad' => $request->getVar('nationality'),
            'posicion' => $request->getVar('position'),
            'idClub' => $request->getVar('club'),
            'idSeleccion' => $request->getVar('nationalTeam')
        ];

        
        $myFutbolista->insert($data);

        echo "Perfect!";
    }

    public function delete(){

        
    }

}