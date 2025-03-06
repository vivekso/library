@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>Order Details</h2>
    
    <div class="card p-3">
        <h4>Order Number: #ORD12345</h4>
        
        <h5>Customer Details</h5>
        <p><strong>Name:</strong> John Doe</p>
        <p><strong>Email:</strong> john@example.com</p>
        <p><strong>Contact:</strong> +91 9876543210</p>

        <h5>Product Details</h5>
        <p><strong>Product:</strong> Online Course</p>
        <p><strong>Price:</strong> ₹1500</p>

        <h5>Commission Details</h5>
        <p><strong>Commission Amount:</strong> ₹150</p>
        <p><strong>Net Earnings:</strong> ₹1350</p>
    </div>
    
    <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-3">Back to Orders</a>
</div>
@endsection
