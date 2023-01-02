@extends('master')
@section('title')
    Edit-WebMails
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Edit WebMails</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.edit.webMail')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label fro">Type</label>
                                <input class="form-control" type="hidden"  name="webmail_id" value="{{$webmail->id}}">
                                <input class="form-control" type="text" placeholder="Enter Type" value="{{$webmail->type}}"  name="type">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Username" value="{{$webmail->username}}" name="username">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" value="{{$webmail->price}}" name="price">
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
