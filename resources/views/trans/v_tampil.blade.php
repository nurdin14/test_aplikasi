@extends('admin')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header"><a href="/addTransaksi" class="btn btn-primary">Tambah Data</a></div>
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
                            <th>Reference Nomer</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Payment Amount</th>
                            <th>Product ID</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $no => $d)
                        <tr>
                
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $d->reference_no }}</td>
                            <td>{{ $d->price }}</td>
                            <td>{{ $d->quantity }}</td>
                            <td>{{ $d->payment_amount }}</td>
                            <td>{{ $d->id_product }}</td>
                            <td>{{ $d->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection('content')