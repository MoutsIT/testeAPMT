<?php
 
namespace App\Models;
 
use CodeIgniter\Model;

// Apesar de estar anemica devido a simplicidade do projeto, usar uma base permite com que futuras alteracoes no jeito como se faz as queries sejam menos trabalhosas

class Book extends BaseModel {
    var $table = 'books';
}