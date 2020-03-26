<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
class BaseModel extends Model {
 
    var $table = null;
     
    public function __construct() {
        parent::__construct();

        $db = \Config\Database::connect();
    }
 
    public function get_all_books() {

       $query = $this->db->query("select * from {$this->table}");

        return $query->getResult();
    }
 
    public function get_by_id($id) {
      $query =  $this->db->query("select * from {$this->table} where book_id = $id");
       
      return $query->getRow();
    }
 
    public function book_add($data) {
         
        $query = $this->db->table($this->table)->insert($data);
        
        return $this->db->insertID();
    }
 
    public function book_update($where, $data) {
        $this->db->table($this->table)->update($data, $where);

        return $this->db->affectedRows();
    }
 
    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('book_id' => $id)); 
    }
 
}