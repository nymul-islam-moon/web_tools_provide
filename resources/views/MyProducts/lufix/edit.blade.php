@extends('partial.master')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">My Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Lufix Services</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Lufix Services</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('lufix.update', $lufix->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $lufix->title }}">
                                @error('title')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                            <strong>Error!</strong> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Proof</label>
                                <input type="text" name="proof" class="form-control" placeholder="Proof" value="{{ $lufix->proof }}">
                                @error('proof')
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                        <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                        <strong>Error!</strong> {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Sellling Type</label>
                                <input type="text" name="selling_type" class="form-control" placeholder="Selling Type" value="{{ $lufix->selling_type }}">
                                @error('selling_type')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                            <strong>Error!</strong> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label>Duration</label>
                                <input type="text" name="duration" class="form-control" placeholder="Duration" value="{{  $lufix->duration }}">
                                @error('duration')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                            <strong>Error!</strong> {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label>Price Type</label>
                                <input type="text" name="price_type" class="form-control" placeholder="Price Type" value="{{  $lufix->price_type }}">

                                @error('price_type')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                            <strong>Error!</strong> {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control" placeholder="Status" value="{{  $lufix->status }}">
                                @error('status')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                            <strong>Error!</strong> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="4" id="description" placeholder="Description" style="height: 170px;">{{  $lufix->description }}</textarea>
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
