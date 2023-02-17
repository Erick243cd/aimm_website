<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Pages extends BaseController
{
    public function views($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            return view('errors/404');
        }
        $limit = $page == 'home' ? 12 : 100;
        $data = [
            'page' => $page,
            'title' => ucfirst($page) . ' | AIMM',
//            'video' => $this->videoModel->orderBy('created_at', 'DESC')->getVideo(null),
//            'services' => $this->serviceModel->getHomeServices($limit),
//            'contacts' => $this->coordModel->asObject()->first(),
//            'user_data' => session()->get('user_data')
        ];
        echo view('pages/' . $page, $data);
    }
}
