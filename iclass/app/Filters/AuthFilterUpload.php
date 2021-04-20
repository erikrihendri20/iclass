<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilterUpload implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->is_upload != true) {
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            silahkan masuk terlebih dahulu
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('masuk'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
