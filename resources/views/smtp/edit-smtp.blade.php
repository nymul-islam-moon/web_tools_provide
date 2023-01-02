@extends('master')

@section('title')
    Edit-SMPTs
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Edit SMTPs</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.edit.smtp')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Host</label>
                                <input class="form-control" type="hidden" name="smtp_id" value="{{$smtp->id}}">
                                <input class="form-control" type="text" placeholder="Host" value="{{$smtp->host}}" name="host">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Port</label>
                                <input class="form-control" type="number" placeholder="Port" value="{{$smtp->port}}" name="port">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Username" value="{{$smtp->username}}" name="username">
                            </div>

                            <div class="mb-2">
                                <label class="form-label fro">WebMail</label>
                                <select name="web_mail" id="" class="form-control" >
                                    <option class="form-control" value="web_mail">Yes</option>
                                    <option class="form-control" value="web_mail">No</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" value="{{$smtp->price}}" name="price">
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

@endsection
