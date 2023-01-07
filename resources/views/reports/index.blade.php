@extends('master')

@section('title')
    Lucifer Project | Mailers
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
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail"
                                                                                  class="wd-10 mg-r-5"></i> Email
                    </button>
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer"
                                                                                         class="wd-10 mg-r-5"></i> Print
                    </button>
                    <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file"
                                                                                           class="wd-10 mg-r-5"></i>
                        Generate Report
                    </button>
                </div>
            </div>


            {{-- <div class="container">
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
                                        <input required class="form-control" type="text" placeholder="Mailer"
                                               name="name">
                                        @error('name')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label">Price</label>
                                        <input required class="form-control" type="number" placeholder="Price"
                                               name="price">
                                        @error('price')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mt-2">
                                        <input class="form-control btn btn-primary" type="submit" value="Submit"
                                               name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="text-center">Reports</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered table-hover text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Item Type</th>
                                        <th>Item</th>
                                        <th>View</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Reported On</th>
                                        <th>Last Reply</th>
                                    </tr>


                                    @foreach($reports as $key=> $report)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{$report->item_type}}</td>
                                            <td>{{$report->item}}</td>
                                            <td>{{$report->price}}</td>
                                            <td>{{$report->status}}</td>

                                            @if($report->status == 1)
                                                <td>Enable</td>
                                            @else
                                                <td>Disable</td>
                                            @endif
                                            <td>{{$mailer->added}}</td>
                                            <td>
                                                <table style="margin-left: auto;margin-right: auto;">
                                                    <tr>
                                                        <td>
                                                            <a href="{{route('edit.mailer',['id' => $mailer->id])}}"
                                                               class="btn btn-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <form
                                                                action="{{route('delete.mailer',['id'=>$mailer->id])}})}}"
                                                                method="post" id="delete">
                                                                @csrf
                                                                <input type="hidden" value="{{$mailer->id}}">
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Are you sure??')">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{ $reports->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
