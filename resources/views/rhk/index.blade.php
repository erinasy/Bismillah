@extends('sb-admin.index')

@section('title')
    | DATA RHK
@endsection
@section('content')
<h2>DATA RHK</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            {{-- TOMBOL TAMBAH --}}
            <a href="rhk/create" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-40">
                     <i class="fas fa-plus"></i>
                </span>
                 <span class="text">Tambah RHK</span>
            </a>

            {{-- ALERT SUKSES --}}
            @if (session()->has('success'))
                 <div class="alert alert-success" role="alert">
                     {{ session('success') }}
                 </div> 
            @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Nama RHK</th>
                            <th scope="col">Nama Bidang</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rhk as $s)
                        <tr>
                            <!-- <td>{{ $s->nama_rhk }}</td> -->
                            <td>{!!$s->nama_rhk!!}</td>
                            <td>{{ $s->dt_bidang->nama_bidang}}</td>
                            <td>{{ $s->dt_user->username }}</td>
                            <td>{{ $s->dt_user->role }}</td>
                            <td>
                             <a href="/rhk/{{$s->id}}" class="btn btn-info">View</a>
                            </td>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
