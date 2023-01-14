@extends('partial.master')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">My Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Mailers</a></li>
    </ol>
</div>
<div class="row">

    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Mailers</h4>

            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('mailer.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mailer Name</label>
                            <div class="col-sm-9">
                                <input required type="text" name="name" class="form-control" placeholder="Mailer Name" value="{{ old('name') }}">
                                @error('name')
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
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input required type="number" name="price" class="form-control" placeholder="Price" value="{{ old('price') }}">
                                @error('price')
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
                <h4 class="card-title">Recent Payments Queue</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mailers as $key=> $item)
                                <tr>
                                    <td><strong>{{ $key+1 }}</strong></td>
                                    <td><span class="">{{ $item->name }}</span></td>
                                    {{-- <td><span class="badge light badge-warning">{{ $item->name }}</span></td> --}}
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('mailer.edit', $item->id) }}">Edit</a>
                                                <form action="{{ route('mailer.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $mailers->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
