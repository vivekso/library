@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>{{ isset($expert) ? 'Edit Expert' : 'Add Expert' }}</h2>
    <form method="POST" action="{{ isset($expert) ? route('experts.update', $expert->id) : route('experts.store') }}">
        @csrf
        @if(isset($expert))
            @method('PUT')
        @endif

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="ExpertName" class="form-label">Expert Name</label>
                <input type="text" class="form-control @error('ExpertName') is-invalid @enderror" id="ExpertName" name="ExpertName" value="{{ old('ExpertName', $expert->ExpertName ?? '') }}" placeholder="Enter expert name">
                @error('ExpertName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="Qualification" class="form-label">Qualification</label>
                <input type="text" class="form-control @error('Qualification') is-invalid @enderror" id="Qualification" name="Qualification" value="{{ old('Qualification', $expert->Qualification ?? '') }}" placeholder="Enter qualification">
                @error('Qualification')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="Location" class="form-label">Location</label>
                <input type="text" class="form-control @error('Location') is-invalid @enderror" id="Location" name="Location" value="{{ old('Location', $expert->Location ?? '') }}" placeholder="Enter location">
                @error('Location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" placeholder="Enter email">
                @error('Email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control @error('Password') is-invalid @enderror" id="Password" name="Password" placeholder="Enter password">
                @error('Password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="Contact" class="form-label">Contact</label>
                <input type="text" class="form-control @error('Contact') is-invalid @enderror" id="Contact" name="Contact" value="{{ old('Contact', $expert->Contact ?? '') }}" placeholder="Enter contact number">
                @error('Contact')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="BuyPrice" class="form-label">Buy Price</label>
                <input type="number" class="form-control @error('BuyPrice') is-invalid @enderror" id="BuyPrice" name="BuyPrice" value="{{ old('BuyPrice', $expert->BuyPrice ?? '') }}" placeholder="Enter buy price">
                @error('BuyPrice')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- <div class="col-md-6 mb-3">
                <label for="Image" class="form-label">Image</label>
                <input type="file" class="form-control @error('Image') is-invalid @enderror" id="Image" name="Image">
                @error('Image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> -->

            <div class="col-md-6 mb-3">
                <label for="Photo" class="form-label">Photo</label>
                <input type="file" class="form-control @error('Photo') is-invalid @enderror" id="Photo" name="Photo">
                @error('Photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="AboutExpert" class="form-label">About Expert</label>
                <textarea class="form-control @error('AboutExpert') is-invalid @enderror" id="AboutExpert" name="AboutExpert" placeholder="Enter details about the expert">{{ old('AboutExpert', $expert->AboutExpert ?? '') }}</textarea>
                @error('AboutExpert')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="Experience" class="form-label">Experience</label>
                <input type="text" class="form-control @error('Experience') is-invalid @enderror" id="Experience" name="Experience" value="{{ old('Experience', $expert->Experience ?? '') }}" placeholder="Enter experience">
                @error('Experience')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="ProfessionalBackground" class="form-label">Professional Background</label>
                <input type="text" class="form-control @error('ProfessionalBackground') is-invalid @enderror" id="ProfessionalBackground" name="ProfessionalBackground" value="{{ old('ProfessionalBackground', $expert->ProfessionalBackground ?? '') }}" placeholder="Enter professional background">
                @error('ProfessionalBackground')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="Availability" class="form-label">Availability</label>
                <input type="text" class="form-control @error('Availability') is-invalid @enderror" id="Availability" name="Availability" value="{{ old('Availability', $expert->Availability ?? '') }}" placeholder="Enter availability">
                @error('Availability')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="Price" class="form-label">Price</label>
                <input type="number" class="form-control @error('Price') is-invalid @enderror" id="Price" name="Price" value="{{ old('Price', $expert->Price ?? '') }}" placeholder="Enter price">
                @error('Price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="ContactPersonName" class="form-label">Contact Person Name</label>
                <input type="text" class="form-control" id="ContactPersonName" name="ContactPersonName" placeholder="Enter contact person name">
            </div>

            <div class="col-md-6 mb-3">
                <label for="ContactPersonNumber" class="form-label">Contact Person Number</label>
                <input type="text" class="form-control" id="ContactPersonNumber" name="ContactPersonNumber" placeholder="Enter contact person number">
            </div>

            <div class="col-md-6 mb-3">
                <label for="OwnerName" class="form-label">Owner Name</label>
                <input type="text" class="form-control" id="OwnerName" name="OwnerName" placeholder="Enter owner name">
            </div>

            <div class="col-md-6 mb-3">
                <label for="BankDetails" class="form-label">Bank Details</label>
                <textarea class="form-control" id="BankDetails" name="BankDetails" placeholder="Enter bank details"></textarea>
            </div>

            <!-- <div class="col-md-6 mb-3">
                <label for="EmptyField1" class="form-label">Empty Field 1</label>
                <input type="text" class="form-control" id="EmptyField1" name="EmptyField1" placeholder="Enter data">
            </div>

            <div class="col-md-6 mb-3">
                <label for="EmptyField2" class="form-label">Empty Field 2</label>
                <input type="text" class="form-control" id="EmptyField2" name="EmptyField2" placeholder="Enter data">
            </div> -->
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($expert) ? 'Update' : 'Save' }}</button>
        <a href="{{ route('experts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
