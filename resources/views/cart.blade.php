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

                        {{-- -------- Start of Cart Details -------- --}}
                        <table id="cart" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th style="width:50%">Product</th>
                                    <th style="width:10%">Price</th>
                                    <th style="width:8%">Quantity</th>
                                    <th style="width:22%" class="text-center">Subtotal</th>
                                    <th style="width:10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-2 hidden-xs"><img src="{{ asset('/uploads/' . unserialize($product->imgs)[0]) }}" alt="..." class="card-img" height="75px" width="100%"/></div>
                                                <div class="col-sm-10">
                                                    <h4 class="nomargin">{{ $product->title }}</h4>
                                                    <p>{{ substr($product->description, 0, 100) }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">${{ $product->price }}</td>
                                        <td data-th="Quantity">
                                            <input type="number" class="form-control text-center" value="1" min="1">
                                        </td>
                                        <td data-th="Subtotal" class="text-center">${{ $product->price }}</td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-info btn-sm"><i class="fas fa-sync"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    @inject('all_products','App\Product')
                                    <td class="hidden-xs text-center"><strong>Total ${{ $all_products->sum($products) }}</strong></td>
                                    <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                                </tr>
                            </tfoot>
                        </table>
                        {{-- -------- End of Cart Details -------- --}}

                    </div>
                {{-- -------- End of Content -------- --}}

            </div>
        </div>
    </div>
@endsection
