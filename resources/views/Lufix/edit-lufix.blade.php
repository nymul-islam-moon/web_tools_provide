@extends('master')

@section('title')
    Lufix Service
@endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit Services</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('updateLufix')}}" method="post">
                                @csrf

                                <div class="form-floating mb-2">
                                    <input type="hidden" name="lufix_services_id" value="{{ $lufix_services->id }}">
                                    <input class="form-control" name="title" type="text"
                                           value="{{ $lufix_services->title }}"
                                           placeholder="Title"/>
                                    <label>Title</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="description" type="text"
                                           value="{{ $lufix_services->description }}"
                                           placeholder="Fresh hits, Auto payment Bills..."/>
                                    <label>Description</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="duration" type="text"
                                           value="{{ $lufix_services->duration }}"
                                           placeholder=" Choose Hits Number"/>
                                    <label>Choose Hits Number</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="price_type" type="text"
                                           value="{{ $lufix_services->price_type}}"
                                           placeholder="Price"/>
                                    <label>Price</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
