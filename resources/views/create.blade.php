@extends('layout.app')
@section('content')

<div class="container">





  @if($errors->any())
    @foreach ($errors->all() as $error)

    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oh snap!</strong>{{$error}}

</div>

    @endforeach

  @endif
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Add student</h3>
    </div>
    <div class="panel-body">


      <form class="form-horizontal" action="{{route('store')}}" method="post">
        {{csrf_field()}}
  <fieldset>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">First Name</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="first_name" id="inputEmail" placeholder="First Name">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Last Name</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="last_name" id="inputEmail" placeholder="Last Name">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Phone</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="phone" id="inputEmail" placeholder="Phone Number">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

    </div>

  </div>
</div>

@endsection
