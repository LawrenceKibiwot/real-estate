@extends('layout.layout')
@section('content')
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <img src="/img/realtors.png" class="img-responsive img-thumbnail" alt="">
        </div>
        <div class="col-lg-9 col-md-9">
            <h2>Tenants</h2>
            <hr>
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Listing Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($payload as $item)
                        <tr>
                            <td>{{ $item->Tenant_Name }}</td>
                            <td>{{ $item->Phone }}</td>
                            <td>{{ $item->Email }}</td>
                            <td>{{ $item->id }}</td>
                            <td> <a href="/terminate{{ $item->Listing_ID }}/{{ $item->id }}"><button
                                        class="btn btn-danger btn-md">Terminate</button>
                                    </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
