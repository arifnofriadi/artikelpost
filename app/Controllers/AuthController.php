<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        helper('form');
        echo view('auth/login');
    }

    public function showRegister()
    {
        helper('form');
        echo view('auth/register');
    }

    public function showForgotPassword()
    {
        helper('form');
        echo view('auth/forgot-password');
    }

    public function register()
    {
        helper('form');
        $rules = [
            'name' => 'required|min_length[2]|max_length[100]',
            'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[5]|max_length[30]',
            'confirmpassword'   => 'matches[password]'
        ];

        if($this->validate($rules)) {
            $userModel = new UserModel();

            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);
            return redirect()->to('/login');
        }else {
            $data['validation'] = $this->validator;
            echo view('auth/register', $data);
        }
    }

    public function login()
    {
        $session = session();

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id'    => $data['id'],
                    'name'  => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn'    => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('dashboard');
            }else{
                $session->setFlashdata('msg', 'Kata sandi tidak sesuai');
                return redirect()->to('/login');
            }
        }else{
            $session->getFlashdata('msg', 'Email tidak ditemukan');
            return redirect()->to('login');
        }
    }
}
