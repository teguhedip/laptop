<?php

namespace App\Controllers;

use App\Models\LaptopModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Laptop extends BaseController
{
    public function index()
    {
        // buat object model $laptop
        $laptop = new LaptopModel();

        /*
        siapkan data untuk dikirim ke view dengan nama $newses
        dan isi datanya dengan news yang sudah terbit
       */
        //$data['lpKu'] = $laptop->where('status', 'published')->findAll();

        $data['lp_all'] = $laptop->findAll();


        // kirim data ke view
        echo view('laptop', $data);
    }

    public function preview($id)
    {
        $lp = new LaptopModel();
        $data['lp'] = $lp->where('id', $id)->first();

        if (!$data['lp']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('laptop_detail', $data);
    }


    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['brand' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $news = new LaptopModel();
            $news->insert([
                "brand" => $this->request->getPost('brand'),
                "tipe" => $this->request->getPost('tipe'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('lp/laptop');
        }

        // tampilkan form create
        echo view('laptop_create_new');
    }

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $lp = new LaptopModel();
        $data['lp'] = $lp->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'brand' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $lp->update($id, [
                "brand" => $this->request->getPost('brand'),
                "tipe" => $this->request->getPost('tipe'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('lp/laptop');
        }

        // tampilkan form edit
        echo view('laptop_edit', $data);
    }

    public function delete($id)
    {
        $lp = new LaptopModel();
        $lp->delete($id);
        return redirect('lp/laptop');
    }
}
