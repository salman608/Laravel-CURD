@extends('layout.app')
@section('content')

<div class="container">
  @if(session('successMsg'))

  <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> {{session('successMsg')}}

</div>
  @endif

  <table class="table table-bordered table-striped table-hover ">
  <thead>
  <tr>
    <th>Id</th>
    <th>First name</th>
    <th>Last Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th class="text-center">Action</th>
  </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
  <tr>

    <td>{{$student->id}}</td>
    <td>{{$student->first_name}}</td>
    <td>{{$student->last_name}}</td>
    <td>{{$student->phone}}</td>
    <td>{{$student->email}}</td>
    <td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="{{route('edit',$student->id)}}"><i class="fa fa-edit"></i></a> ||
      <a class="btn btn-raised btn-danger btn-sm" href="{{route('delete',$student->id)}}"><i class="fa fa-trash"></i></a></td>

  </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
