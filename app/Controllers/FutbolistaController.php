<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Futbolista;

class FutbolistaController extends Controller{
    
    public function index(){

        return view('futbolistaView');

    }

    

}