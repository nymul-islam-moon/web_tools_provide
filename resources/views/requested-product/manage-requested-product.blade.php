@extends('master')

@section('title')
    Manage Requested Product
@endsection

@section('content')
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
            </div>
            <div class="d-none d-md-block">
                <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail" class="wd-10 mg-r-5"></i> Email</button>
                <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
                <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file" class="wd-10 mg-r-5"></i> Generate Report</button>
            </div>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <a href="{{route('requested.product')}}" class="btn btn-success">Add Requested Products</a>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Requested Product Info.</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" style="text-align: center">
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Request Date</th>
                                    <th>Your Response</th>
                                    <th>Action</th>
                                </tr>

                                @php $i=1 @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->message}}</td>
                                        @if($product->status == 0)
                                            <td>Processing</td>
                                        @else
                                            <td>Completed</td>
                                        @endif
                                        <td>{{date("F j, Y, g:i a",strtotime($product->created_at))}}</td>
                                        <td>{{$product->response}}</td>
                                        <td>
                                            @if($product->status == 0)
                                                <a href="{{route('change.status',['id' => $product->id])}}" class="btn btn-primary btn-sm">Completed</a>
                                            @else
                                                <a href="{{route('change.status',['id' => $product->id])}}" class="btn btn-success btn-sm">Process</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

