@extends('master')

@section('title')
    Withdrawals | Lufix
@endsection

@section('content')

    <div class="container">

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Method</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Fees</th>
                    <th scope="col">Received By</th>
                    <th scope="col">TXID/Batch</th>
                    <th scope="col">Orders</th>
                    <th scope="col">Paid</th>
                </tr>
                </thead>

                <tbody>
                @php $key=1; @endphp
                @foreach ($withdraws as $item)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Transaction Details</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Show</a>
                        </td>

                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
