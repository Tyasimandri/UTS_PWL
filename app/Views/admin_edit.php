<?= view('layouts/header') ?>
<?= view('layouts/sidebar_admin') ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-4">
            <h1 class="h3 mb-4 text-gray-800">Edit Barang</h1>

            <div class="card shadow mb-4">
                <div class="card-body">
                    <!-- Dummy Tabel Barang -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mouse Wireless</td>
                                <td>Rp 100.000</td>
                                <td>25</td>
                                <td>Elektronik</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kaos Polos</td>
                                <td>Rp 50.000</td>
                                <td>40</td>
                                <td>Pakaian</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
