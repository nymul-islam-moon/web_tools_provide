@extends('master')

@section('title')
    Shells
@endsection

@section('content')
    <div class="container mt-5">

          <center> <button type="button" class="btn btn-sm btn-primary bg-primary "
                                                  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
           <a class="text-white" href="{{ route('shells.create') }}">
               {{ __('Add Shells') }} </a>
       </button> </center>


    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Shells Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Shell</th>
                                <th>Source</th>
                                <th>Country</th>
                                <th>Hosting</th>
                                <th>SEO Rank</th>
                                <th>Host Info</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($shells as $shell)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$shell->shell}}</td>
                                    <td>{{$shell->source}}</td>
                                    <td>{{$shell->country}}</td>
                                    <td>{{$shell->hosting}}</td>
                                    <td>{{$shell->seo_rank}}</td>
                                    <td>{{$shell->host_info}}</td>
                                    <td>{{$shell->price}}</td>
                                    <td>{{$shell->status}}</td>
                                    <td>{{$shell->created_at}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-success bg-success btn-sm">
                                            <a class="text-white" href="{{ route('shells.edit', $shell->id) }}"> Update</a>
                                        </button>
                                        <button type="submit" class="btn btn-danger bg-danger btn-sm">
                                            <a href="#" class="text-white" onclick="deleteshell({{$shell->id}})"> Delete</a>
                                        </button>

                                        <form id="delete-shell-{{$shell->id}}"
                                              action="{{route('shells.destroy',$shell->id)}}" method="POST">
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
        function deleteshell(id) {
            if (confirm("Do you want to delete it?")) {
                document.getElementById('delete-shell-' + id).submit();
            }
        }
    </script>

@endsection
