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
                        <form action="{{route('add.edit.card')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Security Type</label>
                                <input class="form-control" type="hidden" name="card_id" value="{{$card->id}}">
                                <input class="form-control" type="text" placeholder="Security Type" value="{{$card->security_type}}" name="security_type">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Card Number</label>
                                <input class="form-control" type="number" placeholder="12345578917323" value="{{$card->card_number}}" name="card_number">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Expiration</label>
                                <input class="form-control" type="date" placeholder="03/02/23" value="{{$card->expiration}}"  name="expiration">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">CVV</label>
                                <input class="form-control" type="number" value="{{$card->cvv}}" placeholder="365" name="cvv">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Available Info.</label>
                                <textarea class="form-control" type="text" placeholder="Available Information" name="available_info">{{$card->available_info}}</textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">All Information</label>
                                <textarea class="form-control" type="text" placeholder="All Information" name="all_info">{{$card->all_info}}</textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" value="{{$card->price}}" name="price">
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

@endsection
