@extends('master')

@section('title')
    Update Shells
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Update Shell</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('shells.update', $shells->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-2">
                                <label class="form-label">Shell</label>
                                <input class="form-control" type="text"  name="shell" value="{{old('shell',$shells->shell)}}">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Source</label>
                                <select class="form-select" name="source">
                                    <option selected>Choose Source</option>
                                    <option  value="Hacked">Hacked</option>
                                    <option value="Created">Created</option>

                                </select>
                            </div>



                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" name="price" value="{{old('price',$shells->price)}}">
                            </div>


                            <div class="mt-2">
                                <input class="form-control btn btn-primary" type="submit" value="Update" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
