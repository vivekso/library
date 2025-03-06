@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>Orders</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order Number</th>
                <th>Customer Name</th>
                <th>Product</th>
                <th>Total Price</th>
                <th>Commission</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($orders as $order) --}}
                <tr>
                    <td>#ORD12345</td>
                    <td>John Doe</td>
                    <td>Online Course</td>
                    <td>₹1500</td>
                    <td>₹150</td>
                    <td>
                        <a href="{{ route('orders.show', 1) }}" class="btn btn-sm btn-info">View</a>
                    </td>
                </tr>
                <tr>
                    <td>#ORD12346</td>
                    <td>Jane Smith</td>
                    <td>E-Book</td>
                    <td>₹499</td>
                    <td>₹50</td>
                    <td>
                        <a href="{{ route('orders.show', 2) }}" class="btn btn-sm btn-info">View</a>
                    </td>
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
