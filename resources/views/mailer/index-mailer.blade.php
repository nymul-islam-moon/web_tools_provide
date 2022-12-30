@extends('master')

@section('title')
    Mailers
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add Mailers</h3>
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
                        <h3 class="text-center">Mailers Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Mailer</th>
                                <th>Country</th>
                                <th>Hosting</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Action</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($mailers as $mailer)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$mailer->mailer}}</td>
                                    <td>{{$mailer->country}}</td>
                                    <td>{{$mailer->hosting}}</td>
                                    <td>{{$mailer->price}}</td>
                                    <td>{{$mailer->status}}</td>
                                    <td>{{$mailer->added}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Update</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
