@extends('master')

@section('title')
    Update RDPs
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-3">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Update RDPs</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('rdps.update', $rdps->id)}}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label class="form-label">Host</label>
                            <input class="form-control" type="text" placeholder="Host" name="rdp"
                                   value="{{old('rdp',$rdps->rdp)}}">
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Guranteed</label>
                            <select class="form-select" name="guranteed">
                                <option selected>Do you gurantee your rdp?</option>
                                <option  value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>

                            <div class="mb-2">
                                <label class="form-label">Access</label>
                                <select class="form-select" name="access">
                                    <option selected>Choose Access</option>
                                    <option  value="Admin">Admin</option>
                                    <option value="User">User</option>

                                </select>
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
                                <label class="form-label">OS Version</label>
                                <input class="form-control" type="text" placeholder="OS Version" name="os"
                                       value="{{old('os',$rdps->os)}}">
                            </div>

                            <div class="mb-2">
                                <label class="form-label"> RAM</label>
                                <input class="form-control" type="text" placeholder="Choose RAM" name="rams"
                                       value="{{old('rams',$rdps->rams)}}">
                            </div>

                        <div class="mb-2">
                            <label class="form-label">Price</label>
                            <input class="form-control" type="number" placeholder="Price" name="price"
                                   value="{{old('price',$rdps->price)}}">
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
