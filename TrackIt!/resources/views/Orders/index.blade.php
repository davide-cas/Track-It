@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1><strong>Product Area:</strong></h1>
                <h2>Add Your Product:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}" title="Create a order"> <i class="fas fa-plus-circle"></i> </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Tracking Number</th>
            <th>Courier</th>
            <th>Uploaded At</th>
            <th>Last Update</th>
            <th>Warehouse</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->tracking_number }}</td>
                <td>{{ $order->courier }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->updated_at }}</td>

                @foreach ($warehouses as $warehouse)
                    @if($order->warehouse === $warehouse->id)
                        <td>{{ $warehouse->name }}</td>
                    @endif
                @endforeach

                <td>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">

                        <a href="{{ route('orders.show', $order->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('orders.edit', $order->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $orders->links() !!}

@endsection