<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends BaseController
{
    public function transaksi()
    {
        // Dummy data - Replace this with actual database queries
        $data['transaksi'] = [
            [
                'tanggal' => '2025-04-28',
                'status' => 'Selesai',
                'total' => 'Rp 500,000'
            ],
            [
                'tanggal' => '2025-04-25',
                'status' => 'Proses',
                'total' => 'Rp 150,000'
            ],
            // Add more transactions here
        ];

        return view('user_transaksi', $data);
    }
}
