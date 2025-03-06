@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>Admin Dashboard</h2>

    <div class="row">
        <!-- Dashboard Metrics -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <h3>150</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Commission</h5>
                    <h3>₹11,000</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Libraries</h5>
                    <h3>25</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total E-Books</h5>
                    <h3>120</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Mock Tests</h5>
                    <h3>50</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Experts</h5>
                    <h3>30</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Commissions Table (Left Side) -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">Commissions Summary</div>
                <div class="card-body">
                    <table class="table table-bordered" id="commissionsTable">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Total Commission (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>E-Books</td>
                                <td>₹2,000</td>
                            </tr>
                            <tr>
                                <td>Experts</td>
                                <td>₹5,000</td>
                            </tr>
                            <tr>
                                <td>Library</td>
                                <td>₹4,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recent Orders Table (Right Side) -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header bg-success text-white">Recent Orders</div>
                <div class="card-body">
                    <table class="table table-bordered" id="ordersTable">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Service</th>
                                <th>Amount (₹)</th>
                                <th>Commission (₹)</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1001</td>
                                <td>Rahul Sharma</td>
                                <td>E-Book</td>
                                <td>₹500</td>
                                <td>₹50</td>
                                <td>2025-02-20</td>
                            </tr>
                            <tr>
                                <td>#1002</td>
                                <td>Priya Mehta</td>
                                <td>Expert Session</td>
                                <td>₹1,500</td>
                                <td>₹150</td>
                                <td>2025-02-22</td>
                            </tr>
                            <tr>
                                <td>#1003</td>
                                <td>Amit Verma</td>
                                <td>Library Subscription</td>
                                <td>₹2,000</td>
                                <td>₹200</td>
                                <td>2025-02-24</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DataTables Script -->
@section('scripts')
<script>
    $(document).ready(function () {
        $('#commissionsTable').DataTable();
        $('#ordersTable').DataTable();
    });
</script>
@endsection

@endsection
