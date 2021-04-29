<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilterAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if((session()->logadmin!=true) || (session()->admin_status!=1)){
            if((session()->admin_status!=1)){
                $flash='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            silahkan tunggu admin mengkonfirmasi
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash' , $flash);
                return redirect()->to(base_url().'/auth/masukAdmin');
            }
            else{
                $flash='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            silahkan tunggu admin mengkonfirmasi
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash' , $flash);
                return redirect()->to(base_url().'/auth/masukAdmin');

            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}