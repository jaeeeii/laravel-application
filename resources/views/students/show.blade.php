@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Student Details</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $student->name }}</p>
                        <p><strong>Address:</strong> {{ $student->address }}</p>
                        <p><strong>Contact:</strong> {{ $student->contact }}</p>
                        <!-- New fields -->
                        <p><strong>Course:</strong> {{ $student->course }}</p>
                        <p><strong>Year Level:</strong> {{ $student->year_level }}</p>
                        <p><strong>Section:</strong> {{ $student->section }}</p>
                        <p><strong>Age:</strong> {{ $student->age }}</p>
                        <!-- End of new fields -->
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary"style="background-color: #F1C6E7; color: black; font-weight: bold;">Edit</a>
                    </div>
                    <div class="card">

<div class="card-header">

<h2>QR Code</h2>

</div>

<div class="card-body">

{!! QrCode::size(300)->generate(route('students.show', $student)) !!}

</div>
                </div>
            </div>
        </div>
    </div>
@endsection
