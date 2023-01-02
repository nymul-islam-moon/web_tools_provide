@extends('master')

@section('title')
    Update Cpanels
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-3">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Update Cpanel</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('cpanels.update', $cpanels->id)}}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label class="form-label">Host</label>
                            <input class="form-control" type="text" placeholder="Host" name="cpanel"
                                   value="{{old('cpanel',$cpanels->cpanel)}}">
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
                            <input class="form-control" type="number" placeholder="Price" name="price"
                                   value="{{old('price',$cpanels->price)}}">
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
