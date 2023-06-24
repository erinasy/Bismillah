@extends('sb-admin.index')

@section('title')
    | LAPORAN
@endsection
@section('content')
<h2>Tambah Data RHK Intervensi</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('intervensi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        <p>{{ Session::get('success')}}</p>
                    </div>
                @endif


                <table class="table table-bordered" id="table">
                    <tr> 
                        <th>Nama Intervensi</th>
                        <th>Bidang</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="input[0]['nama_intervensi']" placeholder="Masukkan Data" class="form-control">
                        <td><input type="number" name="input[0]['bidang_id']" placeholder="Pilih Kode Bidang" class="form-control">
                        <td><input type="number" name="input[0]['user_id']" placeholder="Pilih Kode User" class="form-control">
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                    </tr>
                </table>

                <button type="submit" class="btn btn-primary col-md-2">Save</button>
            </form>
        </div>
    </div>
@endsection
