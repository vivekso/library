@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>{{ isset($ebook) ? 'Edit E-Book' : 'Add E-Book' }}</h2>
    <form method="POST" action="{{ isset($ebook) ? route('ebooks.update', $ebook->id) : route('ebooks.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($ebook))
            @method('PUT')
        @endif

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title" class="form-label">Book Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $ebook->title ?? '') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="image" class="form-label">Book Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="col-md-6 mb-3">
                <label for="attachment" class="form-label">Attachment</label>
                <input type="file" class="form-control" name="attachment" id="attachment">
            </div>
            <div class="col-md-6 mb-3">
                <label for="price" class="form-label">Price (&#8377;)</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ old('price', $ebook->price ?? '') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="writer" class="form-label">Writer</label>
                <select class="form-control" name="writer" id="writer">
                    <option value="0">Select Writer</option>
                    <option value="mentor">ABC</option>
                    <option value="library">DCE</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="reference_percentage" class="form-label">Reference %</label>
                <input type="number" class="form-control" name="reference_percentage" id="reference_percentage" value="{{ old('reference_percentage', $ebook->reference_percentage ?? '') }}">
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">{{ isset($ebook) ? 'Update' : 'Save' }}</button>
            <a href="{{ route('ebooks.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
