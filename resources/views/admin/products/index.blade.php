@extends('admin.layouts.master')

@section('page')
     View Product
@endsection

@section('content')

<div class="row">

    <div class="col-md-12">
        @include('admin.layouts.messege')
        <div class="card">



            <div class="header">
                <h4 class="title">All Products</h4>
                <p class="category">List of all stock</p>
                <a href="{{route('products.create')}}" method="post" enctype="multipart/form-data">
            </div>
            {{-- <div class="col-12..text-right" align="right">
                <a href="{{route('products.create')}}">
                  <button type="button"  class="nav-link btn btn-success create-new-button" >Add Product</button>
                </a>
              </div> --}}
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                      @endphp
                    @foreach ( $product as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <img src="{{asset('uploads/products/'.$product->image)}}" width="50px" height="50px" alt="Image">
                        </td>
                        <td>
                            <a href="{{route('products.edit',$product->id)}}"><button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button></a>
                            <a href="{{route('products.delete',$product->id)}}"><button class="btn btn-sm btn-danger ti-trash" title="Delete"></button></a>
                            <a href="{{route('products.details',$product->id)}}"><button class="btn btn-sm btn-primary ti-view-list-alt" title="Details"></button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
