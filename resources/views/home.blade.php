@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="container-fluid" style="height: 175px;">
        <div class="row">

            {{-- -------- Start of Sidebar -------- --}}
                @include('layout.sidebar')
            {{-- -------- End of Sidebar -------- --}}

            <div class="col-md-9 mt-3">
                <h1>Content</h1>

                {{-- -------- Start of Content -------- --}}
                    <div class="row">

                        @foreach($products as $product)
                            <div class="col-sm-6 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-center">Price ${{ $product->price }}</h3>

                                        {{-- -------- Start of Multiple File -------- --}}
                                        <img src="{{ asset('/uploads/' . unserialize($product->imgs)[0]) }}" alt="Img" class="img-fluid" style="height: 175px;">
                                        {{-- -------- End of Multiple File -------- --}}
                                        <div class="caption">
                                            <h3 class="text-center">{{ $product->title }}</h3>
                                            <p>{{ $product->description }}</p>
                                            <p><a href="#" class="btn btn-info" role="button">View Detail</a> <a href="#" class="btn btn-info float-right" role="button">Add To Cart</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                {{-- -------- End of Content -------- --}}

            </div>
        </div>
    </div>
@endsection
