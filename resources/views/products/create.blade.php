@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card mt-3">
                    <div class="card-body">
                        {{-- -------- Start of Errors -------- --}}
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">
                                    {{ $error }}
                                </p>
                            @endforeach
                        @endif
                        {{-- -------- End of Errors -------- --}}
                        {{-- -------- Start of Status -------- --}}
                        @if(session('status'))
                            <p class="alert alert-success">{{ session('status') }}</p>
                        @endif
                        {{-- -------- End of Status -------- --}}
                        {{-- -------- Start of Product Create Form -------- --}}
                        <form action="{{ url('/products/create') }}" method="post" enctype="multipart/form-data">
                            <legend>Insert A New Product</legend>
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img" class="form-label d-block">Image</label>
                                <input type="file" id="img" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        {{-- -------- End of Product Create Form -------- --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
