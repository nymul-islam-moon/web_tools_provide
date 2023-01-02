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
                        <form action="{{route('add.card')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Security Type</label>
                                <input class="form-control" type="text" placeholder="Security Type" name="security_type">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Card Number</label>
                                <input class="form-control" type="number" placeholder="12345578917323" name="card_number">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Expiration</label>
                                <input class="form-control" type="date" placeholder="03/02/23" name="expiration">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">CVV</label>
                                <input class="form-control" type="number" placeholder="365" name="cvv">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Available Info.</label>
                                <textarea class="form-control" type="text" placeholder="Available Information" name="available_info"></textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">All Information</label>
                                <textarea class="form-control" type="text" placeholder="All Information" name="all_info"></textarea>
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
                        <div class="table-responsive">
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
                                    <td>{{$card->country}}</td>
                                    <td>{{$card->price}}</td>
                                    @if($card->status == 1)
                                        <td>Enable</td>
                                    @else
                                        <td>Disable</td>
                                    @endif
                                    <td>{{$card->added}}</td>
                                    <td>
                                        <a href="{{route('edit.card',['id' => $card->id])}}" class="btn btn-primary btn-sm">Update</a>
                                        <form action="{{route('delete.card',['id'=>$card->id])}})}}" method="post" id="delete">
                                            @csrf
                                            <input type="hidden" value="{{$card->id}}">
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
    </div>
@endsection
