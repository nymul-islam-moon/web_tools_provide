@extends('partial.master')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">My Products</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Leads</a></li>
    </ol>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Leads</h4>
                <div class="btn-group">
                    <a type="button" href="{{ route('lead.pdf.download') }}" class="btn btn-primary">Download PDF</a>
                    {{-- <button type="button" class="btn btn-primary">Middle</button> --}}
                    {{-- <button type="button" class="btn btn-primary">Right</button> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">#</th>
                                <th>Actions</th>
                                <th>Provider</th>
                                <th>Number</th>
                                <th>Type</th>
                                <th>Download Link</th>
                                <th>Country</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Description</th>
                                <th>Additional Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $key=> $lead)
                                <tr>
                                    <td><strong>{{ $key+1 }}</strong></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('lead.edit', $lead->id) }}">Edit</a>
                                                <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $lead->provider }}</td>
                                    <td>{{ $lead->phone_number }}</td>
                                    <td>{{ $lead->type }}</td>
                                    <td>{{ $lead->download_link }}</td>
                                    <td>{{ $lead->country }}</td>
                                    <td>{{ $lead->price }}</td>
                                    <td>{{ $lead->status }}</td>
                                    <td>{{ $lead->created_at }}</td>
                                    <td>{{ $lead->description }}</td>
                                    <td>{{ $lead->additional_information }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
