<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Book;

class BookController extends Controller { 
 
    public function index() {
         
        helper(['form', 'url']);

        $this->Book = new Book();

        $data['books'] = $this->Book->get_all_books();
        
        return view('book_view', $data);
    }
 
    public function add() {
 
        helper(['form', 'url']);

        $this->Book = new Book();
 
        $data = array(
            'book_isbn'     => $this->request->getPost('book_isbn'),
            'book_title'    => $this->request->getPost('book_title'),
            'book_author'   => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );

        $insert = $this->Book->book_add($data);

        echo json_encode(array("status" => true));
    }
 
    public function ajax_edit($id) {
 
        $this->Book = new Book();
 
        $data = $this->Book->get_by_id($id);
 
        echo json_encode($data);
    }
 
    public function update() {
 
        helper(['form', 'url']);
        $this->Book = new Book();
 
        $data = array(
            'book_isbn'     => $this->request->getPost('book_isbn'),
            'book_title'    => $this->request->getPost('book_title'),
            'book_author'   => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );

        $this->Book->book_update(array('book_id' => $this->request->getPost('book_id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function delete($id) {
 
        helper(['form', 'url']);
        $this->Book = new Book();
        $this->Book->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}