@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tracking Number:</strong>
                    <input type="text" name="tracking_number" value="{{ $order->tracking_number }}" class="form-control" placeholder="Tracking Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Courier:</strong>
                    <select name="courier" placeholder="Courier" required>
                        <option value="null">
                        <option value="TNT"> TNT
                        <option value="Bartolini"> Bartolini
                        <option value="SDA"> SDA
                        <option value="FedEx"> FedEx
                        <option value="Amazon"> Amazon
                        <option value="DHL"> DHL
                        <option value="Poste Italiane"> Poste Italiane
                        <option value="UPS"> UPS
                        <option value="GLS"> GLS
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection