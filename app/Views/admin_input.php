<?= view('layouts/header') ?>
<?= view('layouts/sidebar_admin') ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-4">
            <h1 class="h3 mb-4 text-gray-800">Input Barang</h1>

            <div class="card shadow mb-4">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="namaBarang">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" placeholder="Masukkan nama barang">
                        </div>
                        <div class="form-group">
                            <label for="hargaBarang">Harga</label>
                            <input type="number" class="form-control" id="hargaBarang" placeholder="Masukkan harga">
                        </div>
                        <div class="form-group">
                            <label for="stokBarang">Stok</label>
                            <input type="number" class="form-control" id="stokBarang" placeholder="Masukkan stok">
                        </div>
                        <div class="form-group">
                            <label for="kategoriBarang">Kategori</label>
                            <select class="form-control" id="kategoriBarang">
                                <option>Elektronik</option>
                                <option>Pakaian</option>
                                <option>Makanan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
