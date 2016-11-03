@extends('app');

@section('content')
    <div class="container">
         <h3>Orders</h3>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <p class="bg-primary">Orders List</p>
                <div class="row">
                    <div class="col-sm-1">
                        ID
                    </div>
                    <div class="col-sm-3">
                        Cliente
                    </div>
                    <div class="col-sm-3">
                        Entregador
                    </div>
                    <div class="col-sm-2" align="right">
                        Total
                    </div>
                    <div class="col-sm-2">
                        Status
                    </div>
                    <div>
                        Ações
                    </div>
                </div>
                @foreach($orders as $order)
                    <div class="row">
                        <div class="col-sm-1">
                            {{$order->id}}
                        </div>
                        <div class="col-sm-3">
                            {{$order->client->user->name}}
                        </div>
                        <div class="col-sm-3">
                            {{$order->deliveryman ? $order->deliveryman->name : '' }}
                        </div>
                        <div class="col-sm-2" align="right">
                            {{$order->total}}
                        </div>
                        <div class="col-sm-2">
                            {{$order->status}}
                        </div>
                        <div>
                            <a href="{{route('admin.orders.show',['id' => $order->id])}}">View Order</a>
                        </div>
                    </div>
               @endforeach
               {!! $orders->render() !!}
            </div>
        </div>
    </div>
@endsection