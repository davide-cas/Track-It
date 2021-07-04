@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tracking Number:</strong>
                {{ $order->tracking_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Courier:</strong>
                {{ $order->courier }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Uploaded At:</strong>
                {{ date_format($order->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Updated At:</strong>
                {{ date_format($order->updated_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warehouse:</strong>
                @foreach ($warehouses as $warehouse)
                    @if($order->warehouse === $warehouse->id)
                        {{ $warehouse->name }}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection