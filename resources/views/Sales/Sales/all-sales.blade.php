@extends('master')

@section('title')
    Sales
@endsection

@section('content')

    <div class="container">

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Item Type</th>
                    <th scope="col">Item</th>
                    <th scope="col">Status</th>
                    <th scope="col">View</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>
                @php $key=1; @endphp
                @foreach ($sales as $item)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>#</td>
                        <td>#</td>

                        @if($item->status == 1)
                            <td>Completed</td>
                        @else
                            <td>Pending</td>
                        @endif

                        <td>
                            <a href="" class="btn btn-primary btn-sm">#View Details</a>
                        </td>

                        <td>#</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Bookmark</a>
                            <a href="" class="btn btn-warning btn-sm">View Report</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
