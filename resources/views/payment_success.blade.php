@extends('layouts.layout')
@section('style')
<style>
    .gsgs {
    float: left;
    width: 100%;
    padding: 4%;
}

.gsgs img {
    float: left;
    width: 36px;
}

.gsgs p {
    font-size: 20px;
    font-weight: bold;
    text-transform: capitalize;
}

.gsgsk {
    float: left;
    width: 100%;
}

.gsgsk p {
    float: left;
}
</style>
@endsection
@section('content')
<div class="gsgs">
<div class="gsgsk">   
<p>Payment Done</p>
<img src="{{ asset('assets/img/png-transparent-right-mark-tick.png') }}" alt="">
</div>

<p>After verify the payment we will send you the download link in whatsapp number or email, within 24 hours.</p>

<p>Please check your mail spam folder.</p>

<p>thank you.</p>
</div>

@endsection
