<?= view('layouts/header') ?>
<?= view('layouts/sidebar_user') ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-3">
            <h1 class="h3 mb-4 text-gray-800">Daftar Transaksi Anda</h1>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Transaksi</th>
                        <th>Status</th>
                        <th>Total Pembelian</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dummy Data - Replace with actual dynamic data from controller -->
                    <tr>
                        <td>1</td>
                        <td>2025-04-28</td>
                        <td><span class="badge badge-success">Selesai</span></td>
                        <td>Rp 500,000</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Lihat Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2025-04-25</td>
                        <td><span class="badge badge-warning">Proses</span></td>
                        <td>Rp 150,000</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Lihat Detail</a>
                        </td>
                    </tr>
                    <!-- Add more transactions here -->
                </tbody>
            </table>
        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
