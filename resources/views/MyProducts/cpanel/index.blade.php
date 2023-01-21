@extends('partial.master')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">My Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">cPanels</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">cPanel</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">#</th>
                                <th>Actions</th>
                                <th>Host</th>
                                <th>User Name</th>
                                <th>Passowrd</th>
                                <th>Country</th>
                                <th>Source</th>
                                <th>Price</th>
                                <th>Seo Rank</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cpanels as $key=> $cpanel)
                                <tr>
                                    <td><strong>{{ $key+1 }}</strong></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('cpanel.edit', $cpanel->id) }}">Edit</a>
                                                <form action="{{ route('cpanel.destroy', $cpanel->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $cpanel->hosting }}</td>
                                    <td>{{ $cpanel->user_name }}</td>
                                    <td>{{ $cpanel->password }}</td>
                                    <td>{{ $cpanel->country }}</td>
                                    <td>{{ $cpanel->source }}</td>
                                    <td>{{ $cpanel->price }}</td>
                                    <td>{{ $cpanel->seo_rank }}</td>
                                    <td>{{ $cpanel->status }}</td>
                                    <td>{{ $cpanel->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $cpanels->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
