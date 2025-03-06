<!-- E-Book Listing Page -->
@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>E-Books</h2>
    <a href="{{ route('ebooks.create') }}" class="btn btn-primary mb-3">Add E-Book</a>
    <table class="table table-bordered" id="datatablesSimple">
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Book Image</th>
                <th>Attachment</th>
                <th>Price</th>
                <th>Status</th>
                <th>Writer</th>
                <th>Reference %</th>
                <th>Actions</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach($ebooks as $ebook)
                <tr>
                    <td>{{ $ebook->title }}</td>
                    <td><img src="{{ asset($ebook->image) }}" width="50"></td>
                    <td><a href="{{ asset($ebook->attachment) }}" target="_blank">Download</a></td>
                    <td>&#8377;{{ $ebook->price }}</td>
                    <td>{{ $ebook->status }}</td>
                    <td>{{ $ebook->writer }}</td>
                    <td>{{ $ebook->reference_percentage }}%</td>
                    <td>
                        <a href="{{ route('ebooks.edit', $ebook->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('ebooks.destroy', $ebook->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        --}}
    </table>
</div>
@endsection
