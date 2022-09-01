@extends('layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laravel 9 CRUD School Application</h2>
            </div>
            <div class="float-end" >
                <a class="btn btn-success" href="{{ route('create') }}"> Create New student</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>KTP</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->ktp }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->address }}</td>
        </tr>
        @endforeach
    </table>
      
@stop