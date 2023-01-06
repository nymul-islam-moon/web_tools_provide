@extends('master')

@section('title')
    Sales
@endsection

@section('content')
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
            </div>
            <div class="d-none d-md-block">
                <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail" class="wd-10 mg-r-5"></i> Email</button>
                <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
                <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file" class="wd-10 mg-r-5"></i> Generate Report</button>
            </div>
        </div>

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

</div>
</div>
@endsection

