<?= view('layouts/header') ?>
<?= view('layouts/sidebar_user') ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-3">
            <h1 class="h3 mb-4 text-gray-800">Your Recent Transactions</h1>

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
                                <th>Action</th>  <!-- Added Action column -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2025-04-01</td>
                                <td>#TXN001</td>
                                <td>$500</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td><a href="#" class="btn btn-info btn-sm">View Details</a></td> <!-- Action Button -->
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2025-04-05</td>
                                <td>#TXN002</td>
                                <td>$200</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td><a href="#" class="btn btn-info btn-sm">View Details</a></td> <!-- Action Button -->
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2025-04-10</td>
                                <td>#TXN003</td>
                                <td>$300</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td><a href="#" class="btn btn-info btn-sm">View Details</a></td> <!-- Action Button -->
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2025-04-15</td>
                                <td>#TXN004</td>
                                <td>$1,000</td>
                                <td><span class="badge bg-danger">Failed</span></td>
                                <td><a href="#" class="btn btn-info btn-sm">View Details</a></td> <!-- Action Button -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <?= view('layouts/footer') ?>
</div>
