@extends('master')

@section('title')
    Edit-Leads
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
                        <h3 class="text-center">Add Leads</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.edit.lead')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Download Link</label>
                                <input class="form-control" type="hidden" name="lead_id" value="{{$lead->id}}">
                                <input class="form-control" type="text" placeholder="Download Link" name="download_link" value="{{$lead->download_link}}">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Number</label>
                                <input class="form-control" type="text" placeholder="Number" value="{{$lead->number}}" name="number">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Type</label>
                                <input class="form-control" type="text" placeholder="Type" value="{{$lead->type}}" name="type">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Provider</label>
                                <input class="form-control" type="text" placeholder="Provider" value="{{$lead->provider}}" name="provider">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" type="text" placeholder="Description" name="description">{{$lead->description}}</textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Additional Info.</label>
                                <textarea class="form-control" type="text" placeholder="Additional Information" name="additional_info">{{$lead->additional_info}}</textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Proof</label>
                                <input class="form-control" type="text" placeholder="Proof" value="{{$lead->proof}}" name="proof">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Country</label>
                                <input class="form-control" type="text" placeholder="Country" value="{{$lead->country}}" name="country">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="text" placeholder="Price" value="{{$lead->price}}" name="price">
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
