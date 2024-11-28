<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Hraci;

class Main extends BaseController
{
    var $hraci;

    public function __construct()
    {
        $this->hraci = new Hraci(); //když napíšu this tak je promenna ve trikde a exituje furt
    }

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
        
        $data["hraci"] = $this->hraci->where('country', 'pl')->where('vaha', 69)->orderBy('vyska','asc')->findAll(); //vytvoří instanci modelu //k promennym tridy musis pristupovat s this

        echo view('hraci', $data);
    }

    public function karty()
    {
        
        $data["hraci"] = $this->hraci->where('country', 'pl')->orderBy('vyska','asc')->findAll();

        echo view('karty', $data); //druhy je to co kontroler posila a kam je to prvni view

    }

    public function hrac($id) 
    {
        $data["hrac"] = $this->hraci->find($id);
        echo view('hrac', $data);
    }
}
