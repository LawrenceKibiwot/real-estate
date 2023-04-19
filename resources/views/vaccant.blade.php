@extends('layout.layout')
@section('content')
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <img src="/img/realtors.png" class="img-responsive img-thumbnail"  alt="">
        </div>
        <div class="col-lg-9 col-md-9">
            <h2>Vaccant Listings</h2>
            <hr>
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Rent</th>
                    <th>Size</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($payload as $item)
                        <tr>
                            <td>{{$item->listing_name}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->type}}</td>
                            <td>{{$item->rent}}</td>
                            <td>{{$item->size}}</td>
                            <td> <a href="/tenant_reg{{{$item->listing_name}}}/{{{$item->id}}}"><button class="btn btn-primary btn-md">Assign Tenant</button></a></td>
                        </tr>
                       
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection