@extends('master')

@section('title')
    Update SSH/WHM
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-3">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Update SSH/WHM</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('sshwhm.update', $sshwhms->id)}}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label class="form-label">Host</label>
                            <input class="form-control" type="text" placeholder="Host" name="ssh"
                                   value="{{old('ssh',$sshwhms->ssh)}}">
                        </div>




                        <div class="mb-2">
                            <label class="form-label">Price</label>
                            <input class="form-control" type="number" placeholder="Price" name="price"
                                   value="{{old('price',$sshwhms->price)}}">
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
