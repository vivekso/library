@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Library Listing</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Library Listing</li>
    </ol>
    <a href="{{ route('libraries.create') }}" class="btn btn-primary mb-3">Add Library</a>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Libraries
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Library Name</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Buy Price</th>
                        <th>Pin Code</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($libraries as $library)
                    <tr>
                        <td>{{ $library->id }}</td>
                        <td>{{ $library->LibraryName }}</td>
                        <td>{{ $library->City }}</td>
                        <td>{{ $library->Address }}</td>
                        <td>₹{{ number_format($library->BuyPrice, 2) }}</td>
                        <td>{{ $library->PinCode }}</td>
                        <td>
                            <a href="{{ route('libraries.edit', $library->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('libraries.destroy', $library->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
