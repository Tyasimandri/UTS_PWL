<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function admin()
    {
        $session = session();
        // Pastikan user yang login adalah admin
        if ($session->get('role') !== 'admin') {
            return redirect()->to('/user'); // Redirect ke halaman user jika bukan admin
        }

        return view('admin_dashboard', ['username' => $session->get('username')]);
    }

    public function user()
    {
        $session = session();
        // Pastikan user yang login adalah user
        if ($session->get('role') !== 'user') {
            return redirect()->to('/admin'); // Redirect ke halaman admin jika bukan user
        }

        return view('user_dashboard', ['username' => $session->get('username')]);
    }
}
