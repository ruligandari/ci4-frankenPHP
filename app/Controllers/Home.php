<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }
    public function index(): string
    {
        $data = [
            'data' => $this->userModel->findAll()
        ];
        return view('admin/dashboard/dashboard', $data);
    }
}
