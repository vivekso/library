@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>Experts</h2>
    <a href="{{ route('experts.create') }}" class="btn btn-primary mb-3">Add Expert</a>

    <table class="table table-bordered" id="expertsTable">
        <thead>
            <tr>
                <th>Expert Name</th>
                <th>Qualification</th>
                <th>Location</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach($experts as $expert)
                <tr>
                    <td>{{ $expert->name }}</td>
                    <td>{{ $expert->qualification }}</td>
                    <td>{{ $expert->location }}</td>
                    <td>{{ $expert->email }}</td>
                    <td>{{ $expert->contact }}</td>
                    <td>&#8377;{{ $expert->price }}</td>
                    <td>{{ $expert->availability }}</td>
                    <td>
                        <a href="{{ route('experts.edit', $expert->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('experts.destroy', $expert->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody> --}}
    </table>
</div>

@endsection
