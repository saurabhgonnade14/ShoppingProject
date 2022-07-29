@extends('admin.layouts.master')

@section('page')
     Edit Product
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">

        @include('admin.layouts.messege')
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Product</h4>
            </div>
            <div class="content">
                <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            {{-- @if($errors->any())

                            @foreach($errors->all as $error)

                            @endforeach
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                            @endif --}}

                            @if(session()->has('msg'))
                            <div class="alert alert-success">{{session()->get('msg')}}</div>
                            @endif

                            <div class="form-group">
                                <label>Product Name:</label>
                                <input type="text"  name="name" placeholder="Macbook pro"  class="form-control border-input {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{$product->name}}">
                                <div class="invalid-feedback">
                                    {{ $errors->has('name') ? $errors->first('name')  : '' }}
                                  </div>
                            </div>

                            <div class="form-group">
                                <label>Product Price:</label>
                                <input type="text"  name="price" placeholder="$2500" class="form-control border-input {{$errors->has('price') ? 'is-invalid' : ''}}" value="{{$product->price}}">
                                <div class="invalid-feedback">
                                    {{ $errors->has('price') ? $errors->first('price')  : '' }}
                                  </div>
                            </div>

                            <div class="form-group">
                                <label>Product Description:</label>
                                <textarea id="description" type="text" cols="30" rows="10"  name="description" placeholder="Product Description" class="form-control border-input {{$errors->has('description') ? 'is-invalid' : ''}}" value="{{$product->description}}"></textarea>
                                <div class="invalid-feedback">
                                    {{ $errors->has('description') ? $errors->first('description')  : '' }}
                                  </div>
                            </div>

                            <div class="form-group">
                                <label>Product Image:</label>
                                <input type="file" name="image" class="form-control border-input {{$errors->has('image') ? 'is-invalid' : ''}}" value="{{$product->image}}">
                                <div class="invalid-feedback">
                                    {{ $errors->has('image') ? $errors->first('image')  : '' }}
                                  </div>
                            </div>

{{--
                            <div class="form-group">
                                <label for="exampleInputFile">Product Image:</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="form-control border-input" id="exampleInputFile" name="image">
                                  </div>
                            </div>
                        </div> --}}

                    </div>
                    <div class="content">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Product</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
