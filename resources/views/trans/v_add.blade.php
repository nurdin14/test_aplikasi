@extends('admin')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">Form Tambah Data</div>
            <div class="card-body">
                <form action="/aksiTambah" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID Product</label>
                        <div class="col-sm-10">
                            <select name="id_product" class="form-control" required>
                                <option value="">-- Silahkan Pilih --</option>
                                @foreach($data as $d)
                                <option value="{{$d->id}}">{{$d->id}} - {{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/trans" class="btn btn-danger">Batal</a>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection('content')