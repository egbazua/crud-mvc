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

        $validation = $this->validate(
            [
                'nameFootballer' => 'required|min_length[3]',
                'ageFootballer' => 'required|min_length[2]',
                'heightFootballer' => 'required|min_length[3]',   
                'skillfulLeg' => 'required|min_length[3]',
                'nationality' => 'required|min_length[3]',
                'position' => 'required|min_length[3]',
                'club' => 'required|min_length[1]',
                'nationalTeam' => 'required|min_length[1]'
            ]
        );

        if (!$validation) {
            $session = session();
            $session -> setFlashdata('message', 'The information is not valid');

            return redirect()->back()->withInput();
        }

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
        return $this->response->redirect(site_url('/futbolista'));
    }

    public function delete($id=null){

        $myFutbolista = new FutbolistaModel();
        $myFutbolista->where('idFutbolista', $id)->delete($id);

        return $this->response->redirect(site_url('/futbolista'));

    }

    public function edit($id=null){

        $myFutbolista = new FutbolistaModel();
        $data['footballer'] = $myFutbolista->where('idFutbolista', $id)->first();

        $data['header'] = view('templates/headerTemplate');
        $data['footer'] = view('templates/footerTemplate');

        return view('editFutbolistaView', $data);

    }

    public function update(){

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

        $id = $request->getVar('idFutbolista');

        $validation = $this->validate(
            [
                'nameFootballer' => 'required|min_length[3]',
                'ageFootballer' => 'required|min_length[2]',
                'heightFootballer' => 'required|min_length[3]',   
                'skillfulLeg' => 'required|min_length[3]',
                'nationality' => 'required|min_length[3]',
                'position' => 'required|min_length[3]',
                'club' => 'required|min_length[1]',
                'nationalTeam' => 'required|min_length[1]'
            ]
        );

        if (!$validation) {
            $session = session();
            $session -> setFlashdata('message', 'The information is not valid');

            return redirect()->back()->withInput();
        }

        $myFutbolista->update($id,$data);

        return $this->response->redirect(site_url('/futbolista'));

    }

}