@extends('master')

@section('title')
    Lucifer Project | Edit-Account
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
        <div class="row-md-12 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit Accounts</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('updateAccount')}}" method="post">
                                @csrf

                                <div class="form-floating mb-2">
                                    <input type="hidden" name="account_id" value="{{ $accounts->id }}">
                                    <input class="form-control" name="account_type" type="text"
                                           value="{{ $accounts->account_type }}"
                                           placeholder="Choose Account Type" required/>
                                    <label>Choose Account Type</label>

                                    @error('account_type')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="hits_link" type="text"
                                           value="{{ $accounts->hits_link }}"
                                           placeholder=" Choose Hits Number" required/>
                                    <label>Choose Hits Number</label>

                                    @error('hits_link')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="website" type="text"
                                           value="{{ $accounts->website }}"
                                           placeholder="www.site.com" required/>
                                    <label>Website</label>

                                    @error('website')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror


                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="country" type="text"
                                           value="{{ $accounts->country }}"
                                           placeholder="Choose Account Country" required/>
                                    <label>Country</label>

                                    @error('country')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror


                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="description" type="text"
                                           value="{{ $accounts->description }}"
                                           placeholder="Fresh hits, Auto payment Bills..." required/>
                                    <label>Description</label>

                                    @error('description')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror


                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="price" type="text" value="{{ $accounts->price }}"
                                           placeholder="Price" required/>
                                    <label>Price</label>

                                    @error('proof')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
