@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Student</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="contact" name="contact" value="{{ $student->contact }}">
                            </div>
                            <!-- New fields -->
                            <div class="form-group">
                                <label for="course">Course</label>
                                <input type="text" class="form-control" id="course" name="course" value="{{ $student->course }}">
                            </div>
                            <div class="form-group">
                                <label for="year_level">Year Level</label>
                                <input type="text" class="form-control" id="year_level" name="year_level" value="{{ $student->year_level }}">
                            </div>
                            <div class="form-group">
                                <label for="section">Section</label>
                                <input type="text" class="form-control" id="section" name="section" value="{{ $student->section }}">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" name="age" value="{{ $student->age }}">
                            </div>
                            <!-- End of new fields -->
                            <button type="submit" class="btn btn-primary"style="background-color: #F1C6E7; color: black; font-weight: bold;">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
