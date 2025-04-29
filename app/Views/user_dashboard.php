<?= view('layouts/header') ?>
<?= view('layouts/sidebar_user') ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-3">
            <h1 class="h3 mb-4 text-gray-800">Welcome, User</h1>
            <p>Welcome to your dashboard. Here you can view your activities and transactions.</p>

            <!-- User Stats Section -->
            <div class="row">
                <!-- Total Transactions -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Total Transactions</h5>
                            <p class="card-text h2 font-weight-bold text-gray-800">$2,500</p>
                        </div>
                    </div>
                </div>

                <!-- Pending Transactions -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Pending Transactions</h5>
                            <p class="card-text h2 font-weight-bold text-gray-800">$1,200</p>
                        </div>
                    </div>
                </div>

                <!-- Successful Transactions -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <h5 class="card-title text-success">Successful Transactions</h5>
                            <p class="card-text h2 font-weight-bold text-gray-800">$1,300</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Transactions Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Transactions</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2025-04-01</td>
                                <td>#TXN001</td>
                                <td>$500</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2025-04-05</td>
                                <td>#TXN002</td>
                                <td>$200</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2025-04-10</td>
                                <td>#TXN003</td>
                                <td>$300</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2025-04-15</td>
                                <td>#TXN004</td>
                                <td>$1,000</td>
                                <td><span class="badge bg-danger">Failed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Products Section -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Products</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="<?= base_url('images/BluetoothSpeaker.jpg') ?>" class="card-img-top" alt="Bluetooth Speaker" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Bluetooth Speaker</h5>
                                    <p class="card-text">$150</p>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="<?= base_url('images/Smartwatch.jpg') ?>" class="card-img-top" alt="Smartwatch" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Smartwatch</h5>
                                    <p class="card-text">$250</p>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="<?= base_url('images/WirelessH.jpg') ?>" class="card-img-top" alt="Wireless Headphone" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Wireless Headphone</h5>
                                    <p class="card-text">$180</p>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="<?= base_url('images/DSLR.jpg') ?>" class="card-img-top" alt="DSLR Camera" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">DSLR Camera</h5>
                                    <p class="card-text">$300</p>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
