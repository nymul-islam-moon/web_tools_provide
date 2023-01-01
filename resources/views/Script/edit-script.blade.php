@extends('master')

@section('title')
    Script
@endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit Scripts/Programs</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('updateScript')}}" method="post">
                                @csrf

                                <div class="form-floating mb-2">
                                    <input type="hidden" name="script_id"
                                           value="{{ $scripts->id }}">
                                    <input class="form-control" name="hits_link" type="text"
                                           value="{{ $scripts->hits_link }}"
                                           placeholder="Download Link"/>
                                    <label>Download Link</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="script_name" type="text"
                                           value="{{ $scripts->script_name }}"
                                           placeholder="Name"/>
                                    <label>Name</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="description" type="text"
                                           value="{{ $scripts->description }}"
                                           placeholder="Description"/>
                                    <label>Description</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="program_lang" type="text"
                                           value="{{ $scripts->program_lang }}"
                                           placeholder="Lang"/>
                                    <label>Lang</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="price" type="text"
                                           value="{{ $scripts->price }}"
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
