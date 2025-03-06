@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">{{ isset($library) ? 'Edit Library' : 'Add Library' }}</h2>
    
    <form method="POST" action="{{ isset($library) ? route('libraries.update', $library->id) : route('libraries.store') }}">
        @csrf
        @if(isset($library))
            @method('PUT')
        @endif

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="LibraryName" class="form-label">Library Name</label>
                <input type="text" class="form-control @error('LibraryName') is-invalid @enderror" id="LibraryName" name="LibraryName" value="{{ old('LibraryName', $library->LibraryName ?? '') }}" required>
                @error('LibraryName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="City" class="form-label">City</label>
                <input type="text" class="form-control @error('City') is-invalid @enderror" id="City" name="City" value="{{ old('City', $library->City ?? '') }}" required>
                @error('City')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control @error('Address') is-invalid @enderror" id="Address" name="Address" value="{{ old('Address', $library->Address ?? '') }}" required>
                @error('Address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="BuyPrice" class="form-label">Buy Price</label>
                <input type="number" class="form-control @error('BuyPrice') is-invalid @enderror" id="BuyPrice" name="BuyPrice" value="{{ old('BuyPrice', $library->BuyPrice ?? '') }}" min="1" required>
                @error('BuyPrice')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="AboutLibrary" class="form-label">About Library</label>
                <textarea class="form-control @error('AboutLibrary') is-invalid @enderror" id="AboutLibrary" name="AboutLibrary">{{ old('AboutLibrary', $library->AboutLibrary ?? '') }}</textarea>
                @error('AboutLibrary')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="PinCode" class="form-label">Pin Code</label>
                <input type="text" class="form-control @error('PinCode') is-invalid @enderror" id="PinCode" name="PinCode" value="{{ old('PinCode', $library->PinCode ?? '') }}" maxlength="6" minlength="6" required>
                @error('PinCode')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="FromTime" class="form-label">From Time</label>
                <div class="d-flex mb-2">
                    <select class="form-control" id="FromHour" name="FromHour[]" required>
                        <option value="">Select Hour</option>
                        @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <select class="form-control ms-2" id="FromAMPM" name="FromAMPM[]" required>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ToTime" class="form-label">To Time</label>
                <div class="d-flex mb-2">
                    <select class="form-control" id="ToHour" name="ToHour[]" required>
                        <option value="">Select Hour</option>
                        @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <select class="form-control ms-2" id="ToAMPM" name="ToAMPM[]" required>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>
                </div>
            </div>
            <div id="additionalTimings"></div>
            <button type="button" id="addMoreTiming" class="btn btn-secondary mb-3">Add More Timing</button>

        <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary">{{ isset($library) ? 'Update' : 'Add' }} Library</button>
                <a href="{{ route('libraries.index') }}" class="btn btn-secondary ms-3">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
