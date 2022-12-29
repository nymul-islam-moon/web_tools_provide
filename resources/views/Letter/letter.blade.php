@extends('master')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="button mb-4">
                <button class="btn btn-info"><span>General</span></button>

                <button class="btn btn-info">Added Scam Pages/Letters</button>

                <button class="btn btn-info">Add Scam Pages/Letters</button>
            </div>

            <div class="col-md-1">
                <label class="form-label">Show</label>
                <select class="form-select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label">Status</label>
                <select class="form-select">
                    <option>Sold</option>
                    <option>Unsold</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label">Type</label>
                <select class="form-select">
                    <option>All</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Description:</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-1">
                <label class="form-label">Price Min</label>
                <input type="text" class="form-control" placeholder="$ Min">
            </div>
            <div class="col-md-1">
                <label class="form-label">Price Max</label>
                <input type="text" class="form-control" placeholder="$ Max">
            </div>
            <div class="col-md-2">
                <label class="form-label">Search:</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Download Link</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Added</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @php $key=1; @endphp
                @foreach ($letter as $item)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->download_link }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->ctreated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
