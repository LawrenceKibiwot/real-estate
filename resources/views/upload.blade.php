@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="img-center">
            <center> <img src="/img/realtors.png" alt="Real estate" height="250" class="img-padding">
            </center>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1">
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Upload New Property.</h2>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('store-form') }}" method="POST">
                            @csrf
                            <fieldset>
                                <label for="name">Property Name:</label>
                                <input type="text" class="form-control" placeholder="Enter name of new listing"
                                    name="name">
                                <label for="Location">Location:</label>
                                <input type="text" name="location" placeholder="Enter listing location"
                                    class="form-control">
                                <label for="Type">Type:</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Commercial">Commercial</option>
                                    <option value="One Bedroom">One Bedroom</option>
                                    <option value="Two Bedroom">Two Bedroom</option>
                                    <option value="Three Bedroom">Three Bedroom</option>
                                </select>
                                <label for="rent">Rent Amount:</label>
                                <input type="number" min="1" name="rent" class="form-control">
                                <label for="size">Size(ft):</label>
                                <input type="number" min='20' name="size" class="form-control">
                                <br>
                                <input type="submit" name="submit" value="Upload" class="btn btn-primary btn-lg">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>

        </div>
    </div>
@endsection
