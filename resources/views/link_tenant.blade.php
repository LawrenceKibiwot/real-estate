@extends('layout.layout')
@section('content')

<br>
<br>
<br>

<div class="row">
    <div class="col-lg-3 col-md-3">
        <img src="/img/realtors.png" alt="" class="img-responsive img-thumbnail">
    </div>
    <div class="col-md-9 col-lg-9">
        <h1>
            Vaccant Houses
        </h1>
        <hr>
        <table class="table table-striped">
            <thead>
                     <center>
                <th>S.No</th>
                <th>Listing Name</th>
                <th>Location</th>
                <th>Type</th>
                <th>Rent</th>
                <th>Size</th>
                <th>Action</th>
                    </center>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>S.No</td>
                        <td>{{$item->listing_name}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->rent}}</td>
                        <td>{{$item->size}}</td>
                        <td>
                            <a href="/tenant_reg{{{$item->listing_name}}}/{{{$item->id}}}">
                                <button class="btn btn-md btn-primary">Assign Tenant</button>
                            </a>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection