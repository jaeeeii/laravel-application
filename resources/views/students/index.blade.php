@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                    <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student" style="background-color: pink; color: #000; font-weight: bold;">
    Add New
</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Course</th>
                                    <th>Year Level</th>
                                    <th>Section</th>
                                    <th>Age</th>
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->contact }}</td>
                                    <td>{{ $item->course }}</td>
                                    <td>{{ $item->year_level }}</td>
                                    <td>{{ $item->section }}</td>
                                    <td>{{ $item->age }}</td>
 
                                        <td>
                                        <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm" style="background-color: pink; color: #000; font-family: Arial, sans-serif;"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm" style="background-color: #f81094; color: #000; font-family: Arial, sans-serif;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/students/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                             @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')" style="background-color: #F64a8a; color: black; font-weight: bold;">
    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
