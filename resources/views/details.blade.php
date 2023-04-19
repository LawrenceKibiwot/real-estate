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
            <div class="row">


                <div class="col-lg-6 col-md-6">
                    <h1>Property Details</h1>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            @foreach ($listing as $item)
                                <h3>Name:</h3>{{ $item->listing_name }}
                                <h3>Location:</h3>{{ $item->location }}
                                <h3>Rent:</h3> Ksh. {{ $item->rent }}
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>Size:</h3>{{ $item->size }} Square feet.
                            <h3>Status:</h3>{{ $item->status }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h1>Tenant Details</h1>
                    <hr>
                    @if (count($tenant) < 1)
                        No Tenant Assigned
                        <br> 
                        <a href="/tenant_reg{{ $item->listing_name }}/{{ $item->id }}">Link Tenant</a>
                    @else
                        @foreach ($tenant as $item)
                            <h3>Tenant Name:</h3>{{ $item->Tenant_Name }}
                            <h3>Phone:</h3>{{ $item->Phone }}
                            <h3>Email:</h3>{{ $item->Email }}
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
