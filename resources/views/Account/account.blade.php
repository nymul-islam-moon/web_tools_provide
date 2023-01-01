@extends('master')

@section('title')
    Account
@endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="button mb-4">
                <button class="btn btn-info"><span>General</span></button>

                <button class="btn btn-info">Added Accounts</button>

                <button class="btn btn-info">Add Accounts</button>

                <button class="btn btn-info">Mass Add Accounts</button>

                <button class="btn btn-info">Pro Mass Add Accounts</button>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Add Accounts</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('saveAccount')}}" method="post">
                                @csrf

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="account_type" type="text"
                                           placeholder="Choose Account Type"/>
                                    <label>Choose Account Type</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="hits_link" type="text"
                                           placeholder="Choose Hits Number"/>
                                    <label>Choose Hits Number</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="website" type="text"
                                           placeholder="www.site.com"/>
                                    <label>www.site.com</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="source" type="text"
                                           placeholder="Choose Account Type"/>
                                    <label>Choose Account Type</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="country" type="text"
                                           placeholder="Choose Account Country"/>
                                    <label>Choose Account Country</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="description" type="text"
                                           placeholder="Fresh hits, Auto payment Bills..."/>
                                    <label>Description</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="proof" type="text"
                                           placeholder="url"/>
                                    <label>Proof</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="price" type="text"
                                           placeholder="Price"/>
                                    <label>Price</label>
                                </div>


                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-sm">ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Hits/Download Link</th>
                    <th scope="col">Website</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Country</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Added</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @php $key=1; @endphp
                @foreach ($accounts as $item)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>{{ $item->hits_link }}</td>
                        <td>{{ $item->website }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->account_type }}</td>
                        <td>{{ $item->country }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->updated_at}}</td>
                        <td>
                            <a href="{{route('editAccount',['id'=>$item->id])}}"
                               class="btn btn-primary btn-sm">Update</a>
                            <form action="{{route('deleteAccount')}}" method="post">
                                @csrf
                                <input type="hidden" name="account_id" value="{{$item->id}}">
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure delete this?')">Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
