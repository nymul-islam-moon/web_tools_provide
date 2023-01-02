@extends('master')

@section('title')
    Add Shells
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add Shell</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('shells.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Shell</label>
                                <input class="form-control" type="text"  name="shell" >
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
                                <input class="form-control" type="number" placeholder="Price" name="price" >
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
