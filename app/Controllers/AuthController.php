<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Session\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Hard code username dan password
        $admin_user = 'tyas';
        $admin_password = password_hash('tyas27', PASSWORD_DEFAULT);
        
        $user_user = 'imandri';
        $user_password = password_hash('im09', PASSWORD_DEFAULT);
        
        if ($username === $admin_user && password_verify($password, $admin_password)) {
            session()->set([
                'id' => 1,
                'username' => $username,
                'role' => 'admin',
            ]);
            return redirect()->to('/admin');
        } elseif ($username === $user_user && password_verify($password, $user_password)) {
            session()->set([
                'id' => 2,
                'username' => $username,
                'role' => 'user',
            ]);
            return redirect()->to('/user');
        } else {
            return redirect()->to('/')->with('error', 'Invalid login credentials');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
