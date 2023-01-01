@extends('master')

@section('title')
    Edit-Mailers
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Edit Mailers</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.edit.mailer')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Mailer</label>
                                <input class="form-control" type="hidden" name="mailer_id" value="{{$mailer->id}}">
                                <input class="form-control" type="text" placeholder="Mailer" name="mailer" value="{{$mailer->mailer}}">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" name="price" value="{{$mailer->price}}">
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
