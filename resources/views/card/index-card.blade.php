@extends('master')

@section('title')
    Cards
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add Cards</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Host</label>
                                <input class="form-control" type="text" placeholder="Host" name="host">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Port</label>
                                <input class="form-control" type="number" placeholder="Port" name="port">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Username" name="username">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>

                            <div class="mb-2">
                                <label class="form-label fro">WebMail</label>
                                <select name="type" id="" class="form-control" >
                                    <option class="form-control" value="">WebMail 1</option>
                                    <option class="form-control" value="">WebMail 2</option>
                                    <option class="form-control" value="">WebMail 3</option>
                                </select>
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
                        <h3 class="text-center">Cards Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Card</th>
                                <th>Available Data</th>
                                <th>All Data</th>
                                <th>Country</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($cards as $card)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$card->security_type}}</td>
                                    <td>{{$card->card_number}}</td>
                                    <td>{{$card->available_info}}</td>
                                    <td>{{$card->all_info}}</td>
                                    <td></td>
                                    <td>{{$card->price}}</td>
                                    <td>{{$card->status}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
