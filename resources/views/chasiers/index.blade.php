@extends('layout.be.template')
@section('title','Data Chasier')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-8">
            <a href="{{ route('chasier-create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah
             </a>
            <div class="card">
                <div class="card-header card-body">

                <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->age }}</td>
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