@extends('partial.master')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">My Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Shells</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Shell List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">#</th>
                                <th>Actions</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Source</th>
                                <th>Hosting</th>
                                <th>Country</th>
                                <th>Seo Rank</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Hosting Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shells as $key=> $shell)
                                <tr>
                                    <td><strong>{{ $key+1 }}</strong></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('shell.edit', $shell->id) }}">Edit</a>
                                                <form action="{{ route('shell.destroy', $shell->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="">{{ $shell->name }}</span></td>
                                    <td>{{ $shell->price }}</td>
                                    <td>{{ $shell->source }}</td>
                                    <td>{{ $shell->hosting }}</td>
                                    <td>{{ $shell->country }}</td>
                                    <td>{{ $shell->seo_rank }}</td>
                                    <td>{{ $shell->status }}</td>
                                    <td>{{ $shell->created_at }}</td>
                                    <td>{{ $shell->hosting_info }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $mailers->links() }} --}}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
