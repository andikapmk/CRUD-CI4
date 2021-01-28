<?php

namespace App\Controllers;

use App\Models\OrangModel;
use CodeIgniter\Validation\Validation;

class Orang extends BaseController
{
    protected $OrangModel;

    public function __construct()
    {
        $this->OrangModel = new OrangModel();
    }
    public function index()
    {
        $current_page = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->OrangModel->search($keyword);
        } else {
            $orang = $this->OrangModel;
        }

        $data = [
            'judul' => 'Data Orang',
            // 'orang' => $this->OrangModel->findAll()
            'orang' => $orang->paginate(6, 'orang'),
            'pager' => $this->OrangModel->pager,
            'current_page' => $current_page
        ];


        return view('orang/index', $data);
    }
}
