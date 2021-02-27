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

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 class="text-center">Price $20</h3>
                                <img src="{{ asset('/img/AngularJS.png') }}" alt="Img" class="img-fluid" style="height: 175px;">
                                <div class="caption">
                                    <h3 class="text-center">AngularJs Book</h3>
                                    <p>AngularJs by Waiferkolar, this book will help developer to create pick and dynamic project.</p>
                                    <p><a href="#" class="btn btn-info" role="button">View Detail</a> <a href="#" class="btn btn-info float-right" role="button">Add To Cart</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 class="text-center">Price $20</h3>
                                <img src="{{ asset('/img/Bootstrap.png') }}" alt="Img" class="img-fluid" style="height: 175px;">
                                <div class="caption">
                                    <h3 class="text-center">Bootstrap Book</h3>
                                    <p>Bootstrap by Waiferkolar, this book will help developer to create pick and dynamic project.</p>
                                    <p><a href="#" class="btn btn-info" role="button">View Detail</a> <a href="#" class="btn btn-info float-right" role="button">Add To Cart</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 class="text-center">Price $20</h3>
                                <img src="{{ asset('/img/JavaScript.png') }}" alt="Img" class="img-fluid" style="height: 175px;">
                                <div class="caption">
                                    <h3 class="text-center">AngularJs Book</h3>
                                    <p>JavaScript by Waiferkolar, this book will help developer to create pick and dynamic project.</p>
                                    <p><a href="#" class="btn btn-info" role="button">View Detail</a> <a href="#" class="btn btn-info float-right" role="button">Add To Cart</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                {{-- -------- End of Content -------- --}}

            </div>
        </div>
    </div>
@endsection
