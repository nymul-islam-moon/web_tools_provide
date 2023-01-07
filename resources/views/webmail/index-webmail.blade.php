@extends('master')
@section('title')
    Lucifer Project | WebMail
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
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add WebMails</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.webMail')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-2">
                                <label class="form-label fro">Type</label>
                                    <input required class="form-control" type="text" placeholder="Enter Type" name="type">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input required class="form-control" type="text" placeholder="Username" name="username">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input required class="form-control" type="password" placeholder="Password" name="password">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input required class="form-control" type="number" placeholder="Price" name="price">
                            </div>

                            <div class="mt-2">
                                <input required class="form-control btn btn-primary" type="submit" value="Submit" name="submit">
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
                        <h3 class="text-center">WebMails Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover text-center">
                            <tr>
                                <th>ID</th>
                                <th>WebMail</th>
                                <th>Country</th>
                                <th>Hosting</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($webMails as $webMail)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$webMail->username}}</td>
                                    <td></td>
                                    <td>{{$webMail->hosting}}</td>
                                    <td>{{$webMail->type}}</td>
                                    <td>{{$webMail->category}}</td>
                                    <td>{{$webMail->price}}</td>
                                    @if($webMail->status == 1)
                                        <td>Enable</td>
                                    @else
                                        <td>Disable</td>
                                    @endif
                                    <td>{{$webMail->added}}</td>
                                    <td style="margin-left: auto;margin-right: auto;">
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href="{{route('edit.webMail',['id'=>$webMail->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <form action="{{route('delete.webMail',['id'=>$webMail->id])}})}}" method="post" id="delete">
                                                        @csrf
                                                        <input type="hidden" value="{{$webMail->id}}">
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure??')">Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $webMails->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection

