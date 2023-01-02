@extends('master')

@section('title')
    Account
@endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit Accounts</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('updateAccount')}}" method="post">
                                @csrf

                                <div class="form-floating mb-2">
                                    <input type="hidden" name="account_id" value="{{ $accounts->id }}">
                                    <input class="form-control" name="account_type" type="text"
                                           value="{{ $accounts->account_type }}"
                                           placeholder="Choose Account Type"/>
                                    <label>Choose Account Type</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="hits_link" type="text"
                                           value="{{ $accounts->hits_link }}"
                                           placeholder=" Choose Hits Number"/>
                                    <label>Choose Hits Number</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="website" type="text"
                                           value="{{ $accounts->website }}"
                                           placeholder="www.site.com"/>
                                    <label>www.site.com</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="country" type="text"
                                           value="{{ $accounts->country }}"
                                           placeholder="Choose Account Country"/>
                                    <label>Choose Account Country</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="description" type="text"
                                           value="{{ $accounts->description }}"
                                           placeholder="Fresh hits, Auto payment Bills..."/>
                                    <label>Description</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="price" type="text" value="{{ $accounts->price }}"
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
