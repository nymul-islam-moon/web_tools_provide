@extends('master')

@section('title')
    SSH/WHM
@endsection

@section('content')
    <div class="container mt-5">

        <center> <button type="button" class="btn btn-sm btn-primary bg-primary "
                         data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="text-white" href="{{ route('sshwhm.create') }}">
                    {{ __('Add SSH/WHM') }} </a>
            </button> </center>


    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">SSH/WHM Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>SSH</th>
                                <th>Host Info</th>
                                <th>Has WHM</th>
                                <th>Hosting</th>
                                <th>Country</th>
                                <th>RAMs</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($sshwhms as $sshwhm)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$sshwhm->ssh}}</td>
                                    <td>{{$sshwhm->host_info}}</td>
                                    <td>{{$sshwhm->has_whm}}</td>
                                    <td>{{$sshwhm->hosting}}</td>
                                    <td>{{$sshwhm->country}}</td>
                                    <td>{{$sshwhm->rams}}</td>
                                    <td>{{$sshwhm->price}}</td>
                                    <td>{{$sshwhm->status}}</td>
                                    <td>{{$sshwhm->created_at}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-success bg-success btn-sm">
                                            <a class="text-white" href="{{ route('sshwhm.edit', $sshwhm->id) }}"> Update</a>
                                        </button>
                                        <button type="submit" class="btn btn-danger bg-danger btn-sm">
                                            <a href="#" class="text-white" onclick="deletesshwhm({{$sshwhm->id}})"> Delete</a>
                                        </button>

                                        <form id="delete-sshwhm-{{$sshwhm->id}}"
                                              action="{{route('sshwhm.destroy',$sshwhm->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
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

    <script>
        function deletesshwhm(id) {
            if (confirm("Do you want to delete it?")) {
                document.getElementById('delete-sshwhm-' + id).submit();
            }
        }
    </script>

@endsection
