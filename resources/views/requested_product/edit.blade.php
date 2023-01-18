@extends('partial.master')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">General</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Requested Products</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Requested Products</a></li>
        </ol>

    </div>


    <div class="row">
        <div class="col-xl-12 col-lg-12 mb-3">
            <a href="{{route('requested.product.show')}}" class="btn btn-primary btn-sm">Manage Products</a>
        </div>

        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Requested Products</h4>

                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route('requested.product.update',$requestedProduct->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-9">
                                    <input required type="text" name="name" class="form-control"
                                           placeholder="Product Name" value="{{ $requestedProduct->name }}">
                                    @error('name')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                             stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                             class="mr-2">
                                            <polygon
                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <strong>Error!</strong> {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <textarea required type="text" name="message" class="form-control"
                                              placeholder="Message">{{ $requestedProduct->message }}</textarea>
                                    @error('message')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                             stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                             class="mr-2">
                                            <polygon
                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <strong>Error!</strong> {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
