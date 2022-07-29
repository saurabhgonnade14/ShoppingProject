@extends('admin.layouts.master')

@section('page')
     Orders
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        @include('admin.layouts.messege')
        <div class="card">
            <div class="header">
                <h4 class="title">Orders</h4>
                <p class="category">List of all orders</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                      @endphp

                        @foreach ($order as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>

                        <td>
                            @foreach ($order->products as $item)
                            {{$item->name}}
                            @endforeach
                        </td>

                        <td>
                            @foreach ($order->OrderItems as $item)
                            {{$item->quantity}}
                            @endforeach
                        </td>

                        <td>
                           @if($order->status)
                           <span class="label label-success">Confirmed</span>
                           @else
                            <span class="label label-danger">Pending</span></td>
                           @endif
                        <td>
                            {{-- @if($order->status)
                            <a href="{{route('orders.pending',$order->id)}}"><button class="btn btn-warning btn-sm"
                                    title="Pending">Pending</button></a>
                            @else
                            <a href="{{route('orders.confirm',$order->id)}}"><button class="btn btn-success btn-sm"
                                    title="confirmed">Confirmed</button>
                                    </a>
                            @endif --}}
                            @if($order->status)
                            <a href="{{route('orders.pending',$order->id)}}"><button class="btn btn-warning btn-sm" title="Pending">Pending</button></a>
                            @else
                            <a href="{{route('orders.confirm',$order->id)}}"><button class="btn btn-success btn-sm" title="Confirmed">Confirmed</button></a>
                            @endif
                            <a href="{{route('orders.details',$order->id)}}"><button class="btn btn-danger btn-sm" title="Details">Details</button></a>

                            </td>
                        @endforeach
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
@endsection
