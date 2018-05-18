@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Introduction Row -->
    <h1 class="my-4">About Us
        <small>It's Nice to Meet You!</small>
    </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

    <!-- Team Members Row -->
    <div class="row">
        <div class="col-lg-12">
            <a href=""><h2 class="my-4">Create Hotel</h2></a>
        </div>
        @foreach($hotels as $hotel)
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
            <h3>{{ $hotel->name }}
                <small>{{ $hotel->show }}</small>
            </h3>
            <p>{{ str_limit($hotel->info, 100) }} <a href="#" class="btn btn-sm btn-info text-white">Read more</a></p>
        </div>
        @endforeach
    </div>
{{ $hotels->links() }}
</div>
<!-- /.container -->
@endsection
