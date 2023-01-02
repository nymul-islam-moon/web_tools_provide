@extends('master')

@section('title')
    Add SSH/WHM
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-3">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Add SSH/WHM</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('sshwhm.store')}}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">IP/Host</label>
                            <input class="form-control" type="text" placeholder="Host" name="ssh">
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
