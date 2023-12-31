@extends('layout.be.template')
@section('title','Data Supplier')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-10">
            <a href="{{ route('supplier-create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah
        </a>
            <div class="card">
                <div class="card-header card-body">

                <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama PT</th>
                        <th>Nama Ketua</th>
                        <th>Nomor Kontak</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama_pt }}</td>
                            <td>{{ $row->nama_ketua }}</td>
                            <td>{{ $row->nomor_kontak }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td> Update | Delete </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>

                </div>
            </div>
        </div>
    
</div>
    

@endsection