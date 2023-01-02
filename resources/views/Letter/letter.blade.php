@extends('master')

@section('title')
    Letter
@endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="button mb-4">
                <button class="btn btn-info"><span>General</span></button>

                <button class="btn btn-info">Added Scam Pages/Letters</button>

                <button class="btn btn-info">Add Scam Pages/Letters</button>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Add Scam Pages/Letters</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('saveLetter')}}" method="post">
                                @csrf

                                <div class="form-floating mb-2">
                                    <input class="form-control" name="type" type="text"
                                           placeholder="Type"/>
                                    <label>Type</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="letter_name" type="text"
                                           placeholder="Name"/>
                                    <label>Name</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="hits_link" type="text"
                                           placeholder="Download Link"/>
                                    <label>Download Link</label>
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
                                    <input class="form-control" name="selling_type" type="text"
                                           placeholder="Selling Type"/>
                                    <label>Selling Type</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="instruction" type="text"
                                           placeholder="Instructions (Optional)"/>
                                    <label>Instructions (Optional)</label>
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
                    <th scope="col">Type</th>
                    <th scope="col">Download Link</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Added</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @php $key=1; @endphp
                @foreach ($letters as $item)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->hits_link }}</td>
                        <td>{{ $item->letter_name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>

                        @if($item->status == 1)
                            <td>Enable</td>
                        @else
                            <td>Disable</td>
                        @endif

                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="{{route('editLetter',['id'=>$item->id])}}"
                               class="btn btn-primary btn-sm">Update</a>
                            <form action="{{route('deleteLetter')}}" method="post">
                                @csrf
                                <input type="hidden" name="letter_id" value="{{$item->id}}">
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
