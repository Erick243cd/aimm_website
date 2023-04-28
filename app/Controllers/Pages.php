<?php

namespace App\Controllers;


class Pages extends BaseController
{
    public function views($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            return view('errors/custom/error_404');
        }

        $data = [
            'page' => $page,
            'title' => ucfirst($page) . ' | ' . altData(),
            'posts' => $this->postModel->asObject()->findAll(3),
            'contacts' => $this->coordModel->asObject()->first(),
            'user_data' => session()->get('user_data')
        ];
        return view('pages/' . $page, $data);
    }

    public function donate()
    {
        $data = [
            'page' => 'donate',
            'title' => "Faites-nous un don" . ' | ' . altData(),
            'posts' => $this->postModel->asObject()->findAll(3),
            'contacts' => $this->coordModel->asObject()->first(),
            'user_data' => session()->get('user_data')
        ];
        return view('pages/donate', $data);
    }
}
