@extends('master')

@section('title')
    Cards
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
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add Cards</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.edit.card')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Security Type</label>
                                <input class="form-control" type="hidden" name="card_id" value="{{$card->id}}">
                                <input class="form-control" type="text" placeholder="Security Type" value="{{$card->security_type}}" name="security_type">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Card Number</label>
                                <input class="form-control" type="number" placeholder="12345578917323" value="{{$card->card_number}}" name="card_number">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Expiration</label>
                                <input class="form-control" type="date" placeholder="03/02/23" value="{{$card->expiration}}"  name="expiration">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">CVV</label>
                                <input class="form-control" type="number" value="{{$card->cvv}}" placeholder="365" name="cvv">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Available Info.</label>
                                <textarea class="form-control" type="text" placeholder="Available Information" name="available_info">{{$card->available_info}}</textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">All Information</label>
                                <textarea class="form-control" type="text" placeholder="All Information" name="all_info">{{$card->all_info}}</textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" value="{{$card->price}}" name="price">
                            </div>

                            <div class="mt-2">
                                <input class="form-control btn btn-primary" type="submit" value="Submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
