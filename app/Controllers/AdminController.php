<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ArtikelModel;

class AdminController extends BaseController
{
    public function index()
    {
        $artikels = new ArtikelModel();
        $dataArtikel['artikels'] = $artikels->orderBy('id', 'DESC')->findAll();
        return view('admin/index', $dataArtikel);
    }

    public function users()
    {
        $users = new UserModel();
        $dataUser['users'] = $users->orderBy('id', 'DESC')->findAll();
        return view('admin/users/index', $dataUser);
    }
}
