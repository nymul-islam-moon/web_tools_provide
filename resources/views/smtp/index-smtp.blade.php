@extends('master')

@section('title')
    SMPTs
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add SMTPs</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Host</label>
                                <input class="form-control" type="text" placeholder="Host" name="host">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Port</label>
                                <input class="form-control" type="number" placeholder="Port" name="port">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Username" name="username">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>

                            <div class="mb-2">
                                <label class="form-label fro">WebMail</label>
                                <select name="type" id="" class="form-control" >
                                    <option class="form-control" value="">WebMail 1</option>
                                    <option class="form-control" value="">WebMail 2</option>
                                    <option class="form-control" value="">WebMail 3</option>
                                </select>
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
                        <h3 class="text-center">SMTPs Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>SMTP</th>
                                <th>WebMail</th>
                                <th>Country</th>
                                <th>Hosting</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($smtps as $smtp)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$smtp->username}}</td>
                                    <td>{{$smtp->web_mail}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$smtp->price}}</td>
                                    <td>{{$smtp->status}}</td>
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
