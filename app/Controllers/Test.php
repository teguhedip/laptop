<?php

namespace App\Controllers;

use App\Models\TestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Test extends BaseController
{
    public function index()
    {
        // buat object model $laptop
        $laptop = new TestModel();
        
        /*
        siapkan data untuk dikirim ke view dengan nama $newses
        dan isi datanya dengan news yang sudah terbit
       */
        //$data['lpKu'] = $laptop->where('status', 'published')->findAll();

        $data['lp_all'] = $laptop->findAll();


        // kirim data ke view
        echo view('test/index', $data);
    }

    public function detail($id)
    {
        $lp = new TestModel();
        $data['lp'] = $lp->where('id', $id)->first();

        if (!$data['lp']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('test/detail', $data);
    }
}
