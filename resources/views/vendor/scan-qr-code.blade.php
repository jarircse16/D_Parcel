@extends('vendor.app')

@section('content')
<div id="printSection" align="center" style="display: none;">
    <img src="{{ asset('customer/img/logo/logo.png') }}" height="20%" width="20%">
    <h4 style="text-align: center;">Delivery Report</h4>
    <h6>Weight: {{ $delivery->qty }}</h6>
    <h6>Price: {{ $delivery->item_price }}</h6>
    <h6>Delivery Charge: {{ $delivery->delivery_charge }}</h6>
    <h6>Delivery Time: {{ $delivery->delivery_time }}</h6>
    <h6>Recepient Name: {{ $delivery->recipient_name }}</h6>
    <h6>Recepient Number: {{ $delivery->recipient_number }}</h6>
    <h6>Recepient Address: {{ $delivery->recipient_address }}</h6>
</div>
@endsection
