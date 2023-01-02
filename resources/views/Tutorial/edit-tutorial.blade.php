@extends('master')

@section('title')
    Tutorial
@endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit Tutorials/Methods</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('updateTutorial')}}" method="post">
                                @csrf
                                <div class="form-floating mb-2">
                                    <input type="hidden" name="tutorial_id"
                                           value="{{ $tutorials->id }}">
                                    <input class="form-control" name="hits_link" type="text"
                                           value="{{ $tutorials->hits_link }}"
                                           placeholder="Download Link"/>
                                    <label>Download Link</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="tutorial_name" type="text"
                                           value="{{ $tutorials->tutorial_name }}"
                                           placeholder="Name"/>
                                    <label>Name</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="description" type="text"
                                           value="{{ $tutorials->description }}"
                                           placeholder="Description"/>
                                    <label>Description</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="price" type="text"
                                           value="{{ $tutorials->price }}"
                                           placeholder="Price"/>
                                    <label>Price</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
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
