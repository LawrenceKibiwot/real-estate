@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="img-center">
                    <br>
                    <br>
                    <img src="/img/realtors.png" alt="Real estate" height="150">
                    <hr>
                    <h3>
                        Quick Links
                    </h3>
                    <ul>
                        <li><a href="/upload" class="link">Upload New Listing</a></li>
                        <li><a href="/" class="link">View Listings</a></li>
                        <li><a href="/link_tenant" class="link">Link Tenant</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 margined">
                <div class="row">
                    <div class="col-md-7 col-lg-7">
                        <a href="/list" class="link">
                            <div class="dashboard1">
                        <span class=" right badge bg-primary rounded-pill"> {{ $total ?? ''}}</span>        
                            <center>
                                    <img src="/img/listing.png" class="img-responsive" alt="">
                                    <br>
                                    <h3>
                                         Manage Listings
                                    </h3>
                                </center>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <a href="tenant" class="link">
                            <div class="dashboard2">
                                <h3>
                                    <center>
                                        <img src="/img/tenant.png" class="img-responsive" alt="">
                                        <br>
                                        Manage Tenants
                                    </center>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <div>
                            <a href="/vaccant" class="link">
                                <div class="dashboard3">
                                    
                                    <center>
                                        <img src="/img/vaccant.png" class="img-responsive" alt="">
                                        <br>
                                        <h3>
                                            Vaccant Listings
                                        </h3>
                                    </center>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7">
                        <div>
                            <a href="/upload" class="link">
                                <div class="dashboard4">
                                    <center>
                                        <img src="/img/new.png" class="img-responsive" alt="">
                                        <br>
                                        <h3>
                                            New Listing
                                        </h3>
                                    </center>
                                </div>
                            </a>

                        </div>
                    </div>


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                    @endif
                </div>
            </div>
            <div class="col-lg-1 col-md-1">

            </div>
        </div>
        <hr>
    </div>
@endsection
