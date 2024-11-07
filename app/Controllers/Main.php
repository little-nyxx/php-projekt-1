<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        echo view('pokus');
    }

    public function pokus()
    {
        echo view('pokus');
    }

    public function koncerty()
    {
        echo view('koncerty');
    }

    public function pisnicky()
    {
        echo view('pisnicky');
    }

    public function alba()
    {
        echo view('alba');
    }
}
