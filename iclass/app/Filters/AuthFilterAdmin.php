<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilterAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->logadmin!=true){
            $flash='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            silahkan masuk terlebih dahulu
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash' , $flash);
                return redirect()->to('masukAdmin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}