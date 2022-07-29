@extends('admin.layouts.master')

@section('page')
      User Order Details
@endsection

@section('content')
<div class="container">

    <div class="col-md-12">
        @include('admin.layouts.messege')
        <div class="card">
            <div class="header">
                <h4 class="title">{{$orders[0]->user->name}} Orders Details</h4>
                <p class="category">List of all Users</p>
                {{-- <a href="{{route('orders.details',$order->id)}}" method="post" enctype="multipart/form-data"> --}}

            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Address</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                          @endphp
                         @foreach ($orders as $order)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$order->products[0]->name}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->OrderItems[0]->quantity}}</td>
                            <td>{{$order->OrderItems[0]->price}}</td>
                            <td>{{$order->date}}</td>
                            <td>
                            @if($order->status)
                            <span class="label label-success">Confirmed</span>
                            @else
                             <span class="label label-danger">Pending</span></td>
                            @endif
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
