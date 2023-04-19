@extends('layout.layout')
@section('content')
    <br>
    <br><br>

    <div class="row">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-10 col-md-10">
            <h1>
                Available Listings
            </h1>
            <h3>

            </h3>
            
                <div class="table">
                    <form action="search" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="Search Property Name" id='search' name='search_name'
                                class="form-control">
                        </div>
                        <div class="col">
                            <input type="submit" value="SEARCH" name="submit" class="btn btn-md btn-success">
                        </div>
                    </div>
            </form>

            <hr>

            <form action="table_actions" method="POST">
                @csrf
                <div class="row">

                    <div class="col">
                        Filter By:
                        <select name="type" id="" onchange="this.form.submit()">

                            <option value="">Type</option>
                            <option value="Commercial">Commercial</option>
                            <option value="One Bedroom">One Bedroom</option>
                            <option value="Two Bedroom">Two Bedroom</option>
                            <option value="Three Bedroom">Three Bedroom</option>
                        </select>
{{-- 
                        <select name="status" id="" onchange="this.form.submit()">
                            <option value="">Status</option>
                            <option value="Occupied">Occupied</option>
                            <option value="Vaccant">Vaccant</option>
                        </select> --}}

                        <a href="/list" class="link">
                            Reset
                        </a>
                    </div>

                    <div class="col">
                        Sort By:
                        <select name="sort" id="" onchange="this.form.submit()">
                            <option value="listing_name">Sort Field</option>
                            <option value="listing_name">Name</option>
                            <option value="location">Location</option>
                            <option value="type">Type</option>
                            <option value="size">Size</option>
                        </select>
                    </div>
                    <div>

                    </div>
                </div>
            </form>

            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Rent (Ksh)</th>
                        <th>Size (ft)</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($listings as $listing)
                        <tr>
                            <td>{{ $listing->listing_name }}</td>
                            <td>{{ $listing->location }}</td>
                            <td>{{ $listing->type }}</td>
                            <td>{{ $listing->rent }}</td>
                            <td>{{ $listing->size }}</td>
                            <td>{{ $listing->status }}</td>
                            <td><a href="/edit{{ $listing->id }}"><button
                                        class="btn btn-md btn-primary">Update</button></a></td>
                            <td><a href="/delete{{ $listing->id }}"><button
                                        class="btn-md btn-danger btn">Delete</button></a></td>
                        </tr>
                    @endforeach

                    {{-- @if (isset($status))
                                @foreach ($status as $listing)
                                    <tr>
                                        <td>{{ $listing->listing_name }}</td>
                                        <td>{{ $listing->location }}</td>
                                        <td>{{ $listing->type }}</td>
                                        <td>{{ $listing->rent }}</td>
                                        <td>{{ $listing->size }}</td>
                                        <td>{{ $listing->status }}</td>
                                        <td><a href="/edit{{ $listing->id }}"><button
                                                    class="btn btn-md btn-primary">Update</button></a></td>
                                        <td><a href="/delete{{ $listing->id }}"><button
                                                    class="btn-md btn-danger btn">Delete</button></a></td>
                                    </tr>
                                @endforeach
                            @else
                                @if (isset($listings))
                                    @foreach ($listings as $listing)
                                        <tr>
                                            <td>{{ $listing->listing_name }}</td>
                                            <td>{{ $listing->location }}</td>
                                            <td>{{ $listing->type }}</td>
                                            <td>{{ $listing->rent }}</td>
                                            <td>{{ $listing->size }}</td>
                                            <td>{{ $listing->status }}</td>
                                            <td><a href="/edit{{ $listing->id }}"><button
                                                        class="btn btn-md btn-primary">Update</button></a></td>
                                            <td><a href="/delete{{ $listing->id }}"><button
                                                        class="btn-md btn-danger btn">Delete</button></a></td>
                                        </tr>
                                    @endforeach
                                @endif

                            @endif
                        @endif

                        @if (isset($sort))
                            @foreach ($sort as $listing)
                                <tr>
                                    <td>{{ $listing->listing_name }}</td>
                                    <td>{{ $listing->location }}</td>
                                    <td>{{ $listing->type }}</td>
                                    <td>{{ $listing->rent }}</td>
                                    <td>{{ $listing->size }}</td>
                                    <td>{{ $listing->status }}</td>
                                    <td><a href="/edit{{ $listing->id }}"><button
                                                class="btn btn-md btn-primary">Update</button></a></td>
                                    <td><a href="/delete{{ $listing->id }}"><button
                                                class="btn-md btn-danger btn">Delete</button></a></td>
                                </tr>
                            @endforeach
                        @endif --}}

                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-1 col-md-1"></div>
    </div>
    <script>
        const searchInput = document.getElementById('search');
        const rows = document.querySelectorAll('tbody tr');
        // console.log(rows);
        searchInput.addEventListener('keyup', function(event) {
            // console.log(event);
            const q = event.target.value.toLowerCase();
            rows.forEach((row) => {
                row.querySelector('td').textContent.toLowerCase().startsWith(q) ? row.style.display = '' :
                    row.style.display = 'none';
            })
        })
    </script>
@endsection
