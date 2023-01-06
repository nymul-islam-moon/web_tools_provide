@extends('master')

@section('title')
    Edit-SMPTs
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
                        <h3 class="text-center">Edit SMTPs</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.edit.smtp')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-2">
                                <label class="form-label">Host</label>
                                <input class="form-control" type="hidden" name="smtp_id" value="{{$smtp->id}}">
                                <input required class="form-control" type="text" placeholder="Host" value="{{$smtp->host}}" name="host">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Port</label>
                                <input required class="form-control" type="number" placeholder="Port" value="{{$smtp->port}}" name="port">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input required class="form-control" type="text" placeholder="Username" value="{{$smtp->username}}" name="username">
                            </div>

                            <div class="mb-2">
                                <label class="form-label fro">WebMail</label>
                                <select required name="web_mail" id="" class="form-control" >
                                    <option class="form-control" value="web_mail">Yes</option>
                                    <option class="form-control" value="web_mail">No</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input required class="form-control" type="number" placeholder="Price" value="{{$smtp->price}}" name="price">
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
