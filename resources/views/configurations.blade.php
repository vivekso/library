@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>System Configuration</h2>

    <div class="card">
        <div class="card-header bg-primary text-white">
            General Configuration
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="app_name" class="form-label">Application Name</label>
                <input type="text" class="form-control" id="app_name" placeholder="Enter application name">
            </div>

            <div class="mb-3">
                <label for="logo" class="form-label">Application Logo</label>
                <input type="file" class="form-control" id="logo">
                <img src="assets/images/logo.png" alt="Logo" width="100" class="mt-2">
            </div>

            <div class="mb-3">
                <label for="admin_email" class="form-label">Admin Email</label>
                <input type="email" class="form-control" id="admin_email" placeholder="Enter admin email">
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            Social Media Handlers
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="url" class="form-control" id="facebook" placeholder="Enter Facebook URL">
            </div>
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="url" class="form-control" id="twitter" placeholder="Enter Twitter URL">
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="url" class="form-control" id="instagram" placeholder="Enter Instagram URL">
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-warning text-dark">
            Commission Configuration
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="admin_commission" class="form-label">Admin Commission (%)</label>
                <input type="number" class="form-control" id="admin_commission" placeholder="Enter admin commission percentage">
            </div>
        </div>
    </div>

    <button class="btn btn-primary mt-3">Save Configurations</button>
</div>
@endsection
