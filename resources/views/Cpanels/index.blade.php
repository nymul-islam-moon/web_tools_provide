@extends('master')

@section('title')
    Cpanels
@endsection

@section('content')

    <div class="container mt-5">

        <center> <button type="button" class="btn btn-sm btn-primary bg-primary "
                         data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="text-white" href="{{ route('cpanels.create') }}">
                    {{ __('Add Cpanels') }} </a>
            </button> </center>


    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Cpanels Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Cpanel</th>
                                <th>Country</th>
                                <th>Hosting</th>
                                <th>SEO Rank</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($cpanels as $cpanel)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cpanel->cpanel}}</td>
                                    <td>{{$cpanel->country}}</td>
                                    <td>{{$cpanel->hosting}}</td>
                                    <td>{{$cpanel->seo_rank}}</td>
                                    <td>{{$cpanel->price}}</td>
                                    <td>{{$cpanel->status}}</td>
                                    <td>{{$cpanel->created_at}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-success bg-success btn-sm">
                                            <a class="text-white" href="{{ route('cpanels.edit', $cpanel->id) }}"> Update</a>
                                        </button>
                                        <button type="submit" class="btn btn-danger bg-danger btn-sm">
                                            <a href="#" class="text-white" onclick="deletecpanel({{$cpanel->id}})"> Delete</a>
                                        </button>

                                        <form id="delete-cpanel-{{$cpanel->id}}"
                                              action="{{route('cpanels.destroy',$cpanel->id)}}" method="POST">
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
        function deletecpanel(id) {
            if (confirm("Do you want to delete it?")) {
                document.getElementById('delete-cpanel-' + id).submit();
            }
        }
    </script>
@endsection
