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
            <h2>Update Listing</h2>
            <hr>
            <form action="/update_listing" method="POST">
                @csrf
                <fieldset>
                    @foreach ($payload as $item)
                    <input type="text" value="{{$item->id}}" hidden name="id">
                        <label for="name">Property Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name of new listing" name="name"
                            value="{{$item->listing_name}}">
                        <label for="Location">Location:</label>
                        <input type="text" name="location" placeholder="Enter listing location" class="form-control"  value="{{$item->location}}">
                        <label for="Type">Type:</label>
                        <select name="type" id="" class="form-control">
                            <option value="{{$item->type}}">{{$item->type}}</option>
                            <option value="Commercial">Commercial</option>
                            <option value="One Bedroom">One Bedroom</option>
                            <option value="Two Bedroom">Two Bedroom</option>
                            <option value="Three Bedroom">Three Bedroom</option>
                        </select>
                        <label for="rent">Rent Amount:</label>
                        <input type="number" min="1" name="rent" value="{{$item->rent}}" class="form-control">
                        <label for="size">Size(ft):</label>
                        <input type="number" min='20' name="size" value="{{$item->size}}" class="form-control">
                        <br>
                        <input type="submit" name="submit" value="Update Listing" class="btn btn-primary btn-lg">
                    @endforeach
                </fieldset>

            </form>
        </div>
    </div>
@endsection
