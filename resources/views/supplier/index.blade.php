@extends('layout')
@section('content')
<div class="mt-3">
    <a href="supplier/tambah"><button class="btn btn-success">Tambah Supplier</button></a>
    <a href="/logout">
        <button class="btn btn-danger float-end">Logout</button>
    </a>
    <p>
      <table class="table table-striped">
          <tr class="table-warning">
              <th>
                  NO
              </th>
              <th>
                  Nama Supplier
              </th>
              <th>
                  Email
              </th>
              <th>
                  Password
              </th>
              <th>
                  Alamat
              </th>
              <th>
                  Nomor Telepon
              </th>
              <th>
                  AKSI
              </th>
          </tr>

  @foreach($data as $tempat)
  <tr style="text-align: center; vertical-align: middle;">
      <td>
          {{$loop->iteration}}
      </td>
      <td >
          {{$tempat->nama_supplier}}
      </td>
      <td>
          {{$tempat->email}}
      </td>
      <td>
          {{$tempat->password}}
      </td>
      <td>
          {{$tempat->alamat_supplier}}
      </td>
      <td>
          {{$tempat->telp_supplier}}
      </td>
      <td>
          <a href="supplier/edit/
          {{$tempat->id}}
          "><button class="btn btn-primary">EDIT</button></a>
          <a href="supplier/hapus/
          {{$tempat->id}}
          "><button class="btn btn-danger">HAPUS</button></a>
      </td>
  </tr>
  @endforeach
</table>
</div>
@endsection