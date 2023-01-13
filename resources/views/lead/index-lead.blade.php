@extends('partial.master')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">My Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Leads</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Leads</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('create.mailer')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Download Link</label>
                                <input type="url" name="link" class="form-control" placeholder="Download Link" value="{{ old('link') }}">
                                @error('link')
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
                                <label>Provider</label>
                                <input type="text" class="form-control" placeholder="Provider">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Type</label>
                                <input type="text" class="form-control" placeholder="Type">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Price</label>
                                <input type="number" class="form-control" placeholder="Price">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Proof</label>
                                <input type="text" class="form-control" placeholder="Proof">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <textarea class="form-control" rows="4" id="comment" style="height: 170px;"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Additional Info</label>
                                <textarea class="form-control" rows="4" id="comment" style="height: 170px;"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Leads</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">#</th>
                                <th>Download Link</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Number</th>
                                <th>Provider</th>
                                <th>Country</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($mailers as $key=> $item)
                                <tr>
                                    <td><strong>{{ $key+1 }}</strong></td>
                                    <td><span class="">{{ $item->name }}</span></td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('edit.mailer', $item->id) }}">Edit</a>
                                                <a class="dropdown-item" href="{{ route('delete.mailer', $item->id) }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
