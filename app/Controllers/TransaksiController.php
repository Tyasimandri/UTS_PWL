<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TransaksiController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Laporan Transaksi';

        // Dummy data transaksi
        $data['transaksis'] = [
            [
                'tanggal' => '2025-04-25',
                'nama_pelanggan' => 'Budi',
                'produk' => 'Laptop Acer',
                'jumlah' => 1,
                'total' => '6.500.000'
            ],
            [
                'tanggal' => '2025-04-27',
                'nama_pelanggan' => 'Siti',
                'produk' => 'Mouse Logitech',
                'jumlah' => 2,
                'total' => '300.000'
            ]
        ];

        return view('transaksi', $data);
    }

    public function inputBarang()
    {
        return view('admin_input');
    }
    
    public function editBarang()
    {
        return view('admin_edit');
    }
}
