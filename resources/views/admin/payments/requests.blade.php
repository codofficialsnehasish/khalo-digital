@extends('layouts.app-dashboard')
@section('title') 
Payments 
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Payments</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active" aria-current="page">Payments</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable-search" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-wrap">SL. No.</th>
                                        <th class="text-wrap">Customer Name</th>
                                        <th class="text-wrap">Phone</th>
                                        <th class="text-wrap">Email</th>
                                        <th class="text-wrap">Amount</th>
                                        <th class="text-wrap">Payment Status</th>
                                        <th class="text-wrap">Payment Proof</th>
                                        <th class="text-wrap">Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($payments as $payment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $payment->name }}</td>
                                        <td>{{ $payment->mobile }}</td>
                                        <td>{{ $payment->email }}</td>
                                        <td>{{ $payment->amount }}</td>
                                        <td>{{ $payment->payment_status }}</td>
                                        <td><img src="{{ asset($payment->payment_proof) }}" class="img-thumb" style="cursor: pointer;" alt="" width="60px"></td>
                                        <td>
                                            @if($payment->payment_status == 'Paid')
                                                Copy Link
                                            @else
                                            <a href="{{ route('payment.approve-payment',$payment->id) }}" class="btn btn-success">Approve Payment</a>
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
        </div>
    </div>
    @section('script')
    <script>
        $(document).ready(function() {
            $('.img-thumb').on('click', function() {
                var imgSrc = $(this).attr('src');
                var newWindow = window.open('', '_blank', 'width=800,height=600');
                newWindow.document.write('<html><head><title>Image</title></head><body style="margin:0;display:flex;justify-content:center;align-items:center;height:100vh;"><img src="' + imgSrc + '" style="max-width:100%;max-height:100%;"></body></html>');
            });
        });
    </script>
    @endsection
@endsection