<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \Hermawan\DataTables\DataTable;

class KaryawanController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }
    public function index()
    {
        $data = [
            'user' => $this->userModel->findAll()
        ];
        return view('admin/user/user', $data);
    }

    public function tblData()
    {
        $data = $this->userModel->getAllData();

        return $data->toJson();
    }
}
