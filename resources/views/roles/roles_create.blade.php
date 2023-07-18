
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8">

<div class="card">





  <div class="card-header">Create Roles</div>
  <div class="card-body">

      <form action="{{route('role_store')}}" method="post">
        {!! csrf_field() !!}
        <label>Role</label></br>
        <input type="text" name="role_name" id="role_name" class="form-control" required></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <div style="
        display: flex;
    ">
            <input type="submit" value="Save" class="btn btn-success" required></br>
            <a href="{{route('index')}}" class="btn btn-primary btn-sm" style="padding: 10px;margin-left:20px;"> Back</a>
        </div>

    </form>


  </div>
</div>
        </div>
    </div>
</div>

@stop
