@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="img-center">
            <center> <img src="/img/realtors.png" alt="Real estate" height="250" class="img-padding">
                <h1>
                    Realtor Real Estate Management
                </h1>
            </center>
            <hr>
        
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-10 col-md-10">

                @foreach ($listings as $listing)
                    <div class="card">
                        <a href="/details{{$listing['id']}}" class="link">
                            <img src="/img/realtors.png" alt="Appartment Picture" height="200px" style="width:100%">
                            <hr>
                            <h2>{{$listing['listing_name']}}</h2>
                            <p class="price"><b>Rent:</b> Ksh. {{$listing['rent']}}</p>
                            <p><b>Location:</b>{{$listing['location']}}</p> 
                            <P><b>Status:</b>{{$listing['status']}}</P>
                            {{-- <p><button>View Property</button></p> --}}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-1 col-md-1"></div>

        </div>
    </div>
@endsection

{{-- ok, have seen enough. Will be in touch. Thanks for doing the practical --}}