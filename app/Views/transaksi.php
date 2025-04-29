<?= view('layouts/header') ?>
<?= view('layouts/sidebar_admin') ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-4">
            <h1 class="h3 mb-4 text-gray-800">Laporan Transaksi</h1>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transaksis as $t) : ?>
                                    <tr>
                                        <td><?= $t['tanggal'] ?></td>
                                        <td><?= $t['nama_pelanggan'] ?></td>
                                        <td><?= $t['produk'] ?></td>
                                        <td><?= $t['jumlah'] ?></td>
                                        <td>Rp <?= $t['total'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
