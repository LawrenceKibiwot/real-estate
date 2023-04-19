@extends('layout.layout')
@section('content')
<br>
<br>
<br>

<div class="row">
    <div class="col-md-3 col-lg-3">
        <img src="/img/realtors.png" alt="" class="img-responsive img-thumbnail">
    </div>
    <div class="col-lg-9 col-md-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Register Tenant for {{$name}}</h2>
            </div>
            <div class="panel-body">
                <form action="{{url('tenant_store')}}" method="POST">
                    @csrf
                    <input type="text" value="{{$id}}" hidden name="id">
                    <label for="Name">Tenant Name</label>
                    <input type="text" class="form-control" placeholder="Enter Tenant Name" name="tenant_name">
                    <label for="Phone">Phone</label>
                    <input type="text" name="phone" class="form-control" maxlength="10">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email Address" name="email">
                    <br>
                   <button class="btn btn-md btn-primary">Register Tenant</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection