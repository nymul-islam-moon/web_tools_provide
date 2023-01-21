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
                <h4 class="card-title">Add Lufix Services</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('lufix.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
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
                                <input type="text" name="proof" class="form-control" placeholder="Proof" value="{{ old('proof') }}">
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
                                <input type="text" name="selling_type" class="form-control" placeholder="Selling Type" value="{{ old('selling_type') }}">
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
                                <input type="text" name="duration" class="form-control" placeholder="Duration" value="{{ old('duration') }}">
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
                                <input type="text" name="price_type" class="form-control" placeholder="Price Type" value="{{ old('price_type') }}">

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
                                <input type="text" name="status" class="form-control" placeholder="Status" value="{{ old('status') }}">
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
                                <textarea class="form-control" name="description" rows="4" id="description" placeholder="Description" style="height: 170px;">{{ old('description') }}</textarea>
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
</div>
{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Lufix services</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">#</th>
                                <th>Actions</th>
                                <th>Title</th>
                                <th>Duration</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    {{-- <div class="content content-fixed">
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
                                    <h3 class="text-center font-weight-light my-2">Add Service</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="title" type="text"
                                                   placeholder="Title" required/>
                                            <label>Title</label>
                                            @error('title')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="description" type="text"
                                                   placeholder="Your service description" required/>
                                            <label>Description</label>
                                            @error('description')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="proof" type="text"
                                                   placeholder="url" required/>
                                            <label>Proof</label>
                                            @error('proof')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="selling_type" type="text"
                                                   placeholder="Selling Type" required/>
                                            <label>Selling Type</label>
                                            @error('selling_type')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="duration" type="text"
                                                   placeholder="Duration" required/>
                                            <label>Duration</label>
                                            @error('duration')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="price_type" type="text"
                                                   placeholder="Price Type" required/>
                                            <label>Price Type</label>
                                            @error('price_type')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-sm">ADD</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <table class="table table-bordered" style="text-align: center">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Added</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $key=1; @endphp
                        @foreach ($lufix_services as $item)
                            <tr>
                                <td>{{ $key++ }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->duration }}</td>
                                <td>{{ $item->price_type }}</td>

                                @if($item->status == 1)
                                    <td>Enable</td>
                                @else
                                    <td>Disable</td>
                                @endif

                                <td>{{ $item->updated_at}}</td>
                                <td>
                                    <table style="margin-left: auto;margin-right: auto;">
                                        <tr>
                                            <td>
                                                <a href="{{route('editLufix',['id'=>$item->id])}}"
                                                   class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <form action="{{route('deleteLufix')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="lufix_services_id" value="{{$item->id}}">
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure delete this?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
