<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;

class MainController extends BaseController
{
    public function index()
    {
        $artikels = new ArtikelModel();
        $dataArtikel['artikels'] = $artikels->orderBy('id', 'DESC')->findAll();
        return view('index', $dataArtikel);
    }
}
