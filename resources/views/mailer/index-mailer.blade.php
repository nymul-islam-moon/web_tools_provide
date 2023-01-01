@extends('master')

@section('title')
    Mailers
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add Mailers</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.mailer')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Mailer</label>
                                <input class="form-control" type="text" placeholder="Mailer" name="mailer">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" name="price">
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

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Mailers Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Mailer</th>
                                <th>Country</th>
                                <th>Hosting</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Action</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($mailers as $mailer)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$mailer->mailer}}</td>
                                    <td>{{$mailer->country}}</td>
                                    <td>{{$mailer->hosting}}</td>
                                    <td>{{$mailer->price}}</td>
                                    @if($mailer->status == 1)
                                        <td>Enable</td>
                                    @else
                                        <td>Disable</td>
                                    @endif
                                    <td>{{$mailer->added}}</td>
                                    <td>
                                        <a href="{{route('edit.mailer',['id' => $mailer->id])}}" class="btn btn-primary btn-sm">Update</a>
                                        <form action="{{route('delete.mailer',['id'=>$mailer->id])}})}}" method="post" id="delete">
                                            @csrf
                                            <input type="hidden" value="{{$mailer->id}}">
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure??')">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
