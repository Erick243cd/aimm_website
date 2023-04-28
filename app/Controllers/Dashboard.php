<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard | ' . altData(),

            'users' => $this->userModel->countAll(),

            'posts' => $this->postModel->countAll(),

            'user_data' => session()->get('user_data')
        ];
        return view('dashboard/index', $data);
    }
}
