@extends('master')

@section('title')
    Requested Product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <a href="{{route('manage.requested.product')}}" class="btn btn-success">Manage Requested Products</a>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add Requested Product</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('requested.product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Product Name</label>
                                <input class="form-control" type="text" placeholder="Enter Product Name" name="product_name">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" type="text" placeholder="Write Message" name="message"></textarea>
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
