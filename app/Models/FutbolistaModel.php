<?php 
namespace App\Models;

use CodeIgniter\Model;

class FutbolistaModel extends Model{
    protected $table      = 'futbolista';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idFutbolista';
    protected $allowedFields = ['nombreFutbolista','edad','altura','pieHabil','nacionalidad','posicion','idClub','idSeleccion'];
}