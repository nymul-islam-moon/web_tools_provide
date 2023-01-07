@extends('master')

@section('title')
    Lucifer Project | Edit-Letter
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
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail"
                                                                                  class="wd-10 mg-r-5"></i> Email
                    </button>
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer"
                                                                                         class="wd-10 mg-r-5"></i> Print
                    </button>
                    <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file"
                                                                                           class="wd-10 mg-r-5"></i>
                        Generate Report
                    </button>
                </div>
            </div>


            <div class="container">
                <div class="row-md-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card shadow border-0 rounded-lg mt-3">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-2">Edit Scam Pages/Letters</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('updateLetter')}}" method="post">
                                        @csrf

                                        <div class="form-floating mb-2">
                                            <input type="hidden" name="letter_id"
                                                   value="{{ $letters->id }}">
                                            <input class="form-control" name="type" type="text"
                                                   value="{{ $letters->type }}"
                                                   placeholder="Type" required/>
                                            <label>Type</label>

                                            @error('type')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="hits_link" type="text"
                                                   value="{{ $letters->hits_link }}"
                                                   placeholder="Download Link" required/>
                                            <label>Download Link</label>

                                            @error('hits_link')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="letter_name" type="text"
                                                   value="{{ $letters->letter_name }}"
                                                   placeholder="Name" required/>
                                            <label>Name</label>

                                            @error('letter_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="description" type="text"
                                                   value="{{ $letters->description }}"
                                                   placeholder="Description" required/>
                                            <label>Description</label>

                                            @error('description')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="price" type="text"
                                                   value="{{ $letters->price }}"
                                                   placeholder="Price" required/>
                                            <label>Price</label>

                                            @error('price')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
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
