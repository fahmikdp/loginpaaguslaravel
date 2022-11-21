@extends('layout')
@section('content')

<div class="mt-3">
    <a href="gudang/tambah"><button class="btn btn-primary">Tambah Lokasi</button></a>
    <p>
        <table class="table table-striped">
            <tr class="table-warning">
                <th>
                    NO
                </th>
                <th>
                    Lokasi Gudang
                </th>
                <th>
                    Penanggung Jawab
                </th>
                <th>
                    Keterangan
                </th>
                <th>
                    AKSI
                </th>
            </tr>
    <?php 
        $no = 1;
    ?>
    @foreach($lokasi as $tempat)
    
    <tr>
        <td>
            {{$no++}}
        </td>
        <td>
            {{$tempat->nama_lokasi}}
        </td>
        <td>
            {{$tempat->penanggung_jawab}}
        </td>
        <td>
            {{$tempat->keterangan}}
        </td>
        <td>
            <a href="gudang/edit/{{$tempat->id_lokasi}}"><button>EDIT</button></a>
            <a href="gudang/hapus/{{$tempat->id_lokasi}}"><button>Hapus</button></a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection
