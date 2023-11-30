@extends('admin')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header"><a href="/addProduct" class="btn btn-primary">Tambah Data</a></div>
            <div class="card-body">
                @if(Session:: has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $no => $d)
                        <tr>
                
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->price }}</td>
                            <td>{{ $d->stock }}</td>
                            <td>{{ $d->description }}</td>
                            <td>{{ $d->created_at }}</td>
                            <td>
                                <a href="ubah/{{$d->id_product}}" class="btn btn-warning">Ubah</a>
                                <a href="hapus/{{$d->id_product}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection('content')