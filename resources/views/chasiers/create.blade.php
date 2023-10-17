@extends('layout.be.template')
@section('title','Tambah Chasier')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Tambah Cashier</div>
                    <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                    <form action="{{ route('chasier-store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Cashier</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="text" name="age" class="form-control">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('chasier-index')}}" class="btn btn-warning">Batal</a>
                </form>


                </div>
            </div>
        </div>
    
</div>
    
@endsection