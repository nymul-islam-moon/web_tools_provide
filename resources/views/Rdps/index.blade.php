@extends('master')

@section('title')
    RDPs
@endsection

@section('content')

    <div class="container mt-5">

        <center> <button type="button" class="btn btn-sm btn-primary bg-primary "
                         data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="text-white" href="{{ route('rdps.create') }}">
                    {{ __('Add RDPs') }} </a>
            </button> </center>


    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">RDPs Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>RDP</th>
                                <th>Location</th>
                                <th>Guranteed</th>
                                <th>Hosting</th>
                                <th>Source</th>
                                <th>Access</th>
                                <th>OS</th>
                                <th>Price</th>
                                <th>RAMs</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($rdps as $rdp)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$rdp->rdp}}</td>
                                    <td>{{$rdp->location}}</td>
                                    <td>{{$rdp->guranteed}}</td>
                                    <td>{{$rdp->hosting}}</td>
                                    <td>{{$rdp->source}}</td>
                                    <td>{{$rdp->access}}</td>
                                    <td>{{$rdp->os}}</td>
                                    <td>{{$rdp->price}}</td>
                                    <td>{{$rdp->rams}}</td>
                                    <td>{{$rdp->status}}</td>
                                    <td>{{$rdp->created_at}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-success bg-success btn-sm">
                                            <a class="text-white" href="{{ route('rdps.edit', $rdp->id) }}"> Update</a>
                                        </button>
                                        <button type="submit" class="btn btn-danger bg-danger btn-sm">
                                            <a href="#" class="text-white" onclick="deleterdp({{$rdp->id}})"> Delete</a>
                                        </button>

                                        <form id="delete-rdp-{{$rdp->id}}"
                                              action="{{route('rdps.destroy',$rdp->id)}}" method="POST">
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
        function deleterdp(id) {
            if (confirm("Do you want to delete it?")) {
                document.getElementById('delete-rdp-' + id).submit();
            }
        }
    </script>

@endsection
