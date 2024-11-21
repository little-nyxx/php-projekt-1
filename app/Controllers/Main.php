<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Hraci;

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

    public function hraci()
    {
        $hraci = new Hraci();
        $data["hraci"] = $hraci->where('country', 'pl')->where('vaha', 69)->orderBy('vyska','asc')->findAll();

        echo view('hraci', $data);
    }
}
