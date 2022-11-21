@extends('layout')
@section('content')
<div class="w-50 m-auto">
<form action="/supplier/store" method="POST" >
<div class="mt-5">
    <h2 class="h2 bold">Tambah Supplier</h2>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Supplier</label>
    <input type="text" name="nama_supplier" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="row gx-2">
        <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"    placeholder="example@email.com">
        </div>
        <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat_supplier" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
        <input type="text" name="telp_supplier" class="form-control" id="exampleFormControlInput1" >
        </div>
</div>
<button class="btn btn-primary float-end" type="submit" value="Simpan">Simpan</button>
</form>
<a href="/supplier">
    <button class="btn btn-secondary">Kembali</button>
</a>
</div>
@endsection
