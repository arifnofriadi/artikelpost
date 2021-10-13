<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function store()
    {
        helper(['form']);
        $rules = [
            'title' => 'required|min_length[5]|max_length[100]',
            'description' => 'required|min_length[20]',
        ];

        if($this->validate($rules)) {
            $artikelModel = new ArtikelModel();

            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description')
            ];

            $artikelModel->save($data);
            return redirect()->back();
        }
    }

    public function indexUpdate($id = null)
    {
        $artikelModel = new ArtikelModel();
        $data['artikel'] = $artikelModel->where('id', $id)->first();
        return view('/admin/update', $data);
    }

    public function update()
    {
        $artikelModel = new ArtikelModel();
        $id = $this->request->getVar('id');
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description')
        ];

        $artikelModel->update($id, $data);
        return redirect()->to('/dashboard');
    }

    public function destroy($id = null)
    {
        $artikelModel = new ArtikelModel();
        $data['artikel'] = $artikelModel->where('id', $id)->delete($id);
        return redirect()->back();
    }
}
