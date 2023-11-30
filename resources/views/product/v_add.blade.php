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
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_product">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="stock" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/product" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection('content')