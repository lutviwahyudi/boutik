<?php

namespace App\Controllers;

use App\Models\ClothesModel;
use CodeIgniter\Controller;

class EditProducts extends Controller
{
    protected $clothesModel;

    public function __construct() {
        $this->clothesModel = new ClothesModel();
    }
    
    public function index($id)
    {
        $data = [
            'title' => 'Edit Produk',
            'clothes' => $this->clothesModel->find($id)
        ];  
        return view('edit/products', $data);
    }

    public function submitEdit($id)
    {
        $data = [
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description')
        ];  
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
            $data['image'] = 'uploads/' . $newName; 
    }
        $this->clothesModel->update($id, $data);

        return redirect()->to('products');
    }

    public function deleteProduct($id)
    {
        $this->clothesModel->delete($id);
        return redirect()->to('products');
    }
}

?>