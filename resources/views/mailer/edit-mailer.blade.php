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
                        <form action="{{route('add.edit.mailer', $mailer->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Mailer</label>
                                <input class="form-control" type="text" placeholder="Mailer" name="name" value="{{$mailer->name}}">
                                @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" name="price" value="{{$mailer->price}}">
                                @error('price')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <button class="form-control btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
