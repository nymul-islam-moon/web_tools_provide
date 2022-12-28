@extends('master')

@section('title')
    Leads
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add Leads</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Mailer</label>
                                <input class="form-control" type="text" placeholder="Mailer" name="mailer">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" name="price">
                            </div>

                            <div class="mt-2">
                                <input class="form-control btn btn-primary" type="submit" value="Submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Leads Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
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

                            @php $i=1 @endphp
                            @foreach($leads as $lead)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$lead->download_link}}</td>
                                    <td>{{$lead->description}}</td>
                                    <td>{{$lead->type}}</td>
                                    <td>{{$lead->number}}</td>
                                    <td>{{$lead->provider}}</td>
                                    <td>{{$lead->country}}</td>
                                    <td>{{$lead->price}}</td>
                                    <td>{{$lead->status}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
